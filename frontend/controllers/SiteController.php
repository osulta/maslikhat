<?php
namespace frontend\controllers;

use backend\models\Slider;
use frontend\models\Article;
use frontend\models\Infographics;
use frontend\models\Notification;
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
            ->where(['type' => null])
            ->orderBy(['id' => SORT_DESC])
            ->limit(4)
            ->all();

        $sliderImages = Slider::find()
            ->where(['type' => Slider::SLIDER])
            ->orderBy(['id' => SORT_DESC])
            ->all();

        $notification = Notification::find()
            ->orderBy(['id' => SORT_DESC])
            ->limit(1)
            ->one();

        $article = Article::find()
            ->orderBy(['id' => SORT_DESC])
            ->where(['type' => \backend\models\Article::ARTICLE])
            ->one();

        $infographics = Infographics::find()
            ->orderBy(['id' => SORT_DESC])
            ->where(['type' => Infographics::INFOGRAPHICS])
            ->all();

        return $this->render('index', [
            'news' => $lastNews,
            'sliderImages' => $sliderImages,
            'notification' => $notification,
            'article' => $article,
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

}
