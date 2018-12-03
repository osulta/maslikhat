<?php
namespace frontend\controllers;

use frontend\models\Session;
use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
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
     * @return mixed
     */
    public function actionIndex()
    {
        $lastNews = Session::find()
            ->orderBy(['id' => SORT_DESC])
            ->limit(4)
            ->all();

        return $this->render('index', [
            'news' => $lastNews,
        ]);
    }

    public function actionDownloadFile()
    {
        $fileName = Yii::$app->request->getQueryParam('filename');
        $filePath = Yii::getAlias('@backend') . '/web/uploads/images/' . $fileName;
        if (file_exists($filePath)) {
            return Yii::$app->response->sendFile($filePath);
        }
    }

}
