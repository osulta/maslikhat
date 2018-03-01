<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $enableCsrfValidation = false;
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error', 'tinymce-image-upload'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionTinymceImageUpload()
    {
      /*******************************************************
       * Only these origins will be allowed to upload images *
       ******************************************************/
      $accepted_origins = array("http://maslikhat");

      /*********************************************
       * Change this line to set the upload folder *
       *********************************************/
      $imageFolder = Yii::getAlias('@backend') . "/web/uploads/images/";
      $imageShortPath = "/backend/web/uploads/images/";

      reset ($_FILES);
      $temp = current($_FILES);
      if (is_uploaded_file($temp['tmp_name'])){
        if (isset($_SERVER['HTTP_ORIGIN'])) {
          // same-origin requests won't set an origin. If the origin is set, it must be valid.
          if (in_array($_SERVER['HTTP_ORIGIN'], $accepted_origins)) {
            header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
          } else {
            header("HTTP/1.1 403 Origin Denied");
            return;
          }
        }

        /*
          If your script needs to receive cookies, set images_upload_credentials : true in
          the configuration and enable the following two headers.
        */
        // header('Access-Control-Allow-Credentials: true');
        // header('P3P: CP="There is no P3P policy."');

        // Sanitize input
        if (preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])) {
            header("HTTP/1.1 400 Invalid file name.");
            return;
        }

        // Verify extension
        if (!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array("gif", "jpg", "png"))) {
            header("HTTP/1.1 400 Invalid extension.");
            return;
        }

        // Accept upload if there was no origin, or if it is an accepted origin
        $filetowrite = $imageFolder . $temp['name'];
        $imageShortPath .= $temp['name'];
        move_uploaded_file($temp['tmp_name'], $filetowrite);

        // Respond to the successful upload with JSON.
        // Use a location key to specify the path to the saved image resource.
        // { location : '/your/uploaded/image/file'}
        echo json_encode(array('location' => $imageShortPath));
      } else {
        // Notify editor that the upload failed
        header("HTTP/1.1 500 Server Error");
      }
    }
}
