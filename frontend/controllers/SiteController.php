<?php
namespace frontend\controllers;

use frontend\models\Session;
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

}
