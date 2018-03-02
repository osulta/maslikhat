<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 02.03.2018
 * Time: 13:44
 */

namespace frontend\models;


class Info extends \common\models\Info
{
    public function afterFind()
    {
        $this->date = date('d.m.Y', strtotime($this->date));
        parent::afterFind();
    }
}