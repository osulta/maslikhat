<?php
namespace frontend\controllers;

use backend\models\Slider;
use frontend\models\Infographics;
use frontend\models\Notification;
use frontend\models\Session;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

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
            ->where(['type' => null])
            ->orderBy(['id' => SORT_DESC])
            ->limit(6)
            ->all();

        $sliderImages = Slider::find()
            ->where(['type' => Slider::SLIDER])
            ->orderBy(['id' => SORT_DESC])
            ->limit(5)
            ->all();

        $notification = Notification::find()
            ->orderBy(['id' => SORT_DESC])
            ->one();

        $infographics = Infographics::find()
            ->orderBy(['id' => SORT_DESC])
            ->where(['type' => Infographics::INFOGRAPHICS])
            ->limit(5)
            ->all();

        return $this->render('index', [
            'news' => $lastNews,
            'sliderImages' => $sliderImages,
            'notification' => $notification,
            'infographics' => $infographics
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

    /**
     * @param $id
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'notification' => $this->findNotificationModel($id),
        ]);
    }

    /**
     * Finds the Session model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Notification the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findNotificationModel($id)
    {
        if (($model = Notification::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('Хабарландыру табылмады');
    }
}
