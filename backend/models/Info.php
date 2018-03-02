<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 02.03.2018
 * Time: 11:55
 */

namespace backend\models;


use Yii;

class Info extends \common\models\Info
{
    public function beforeValidate()
    {
        if (parent::beforeValidate()) {
            $this->title_url = Yii::$app->myHelper->transliterateToLatin($this->title);
        }
        return parent::beforeValidate();
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->created_at = time();
        }
        return parent::beforeSave($insert);
    }
}