<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 01.03.2018
 * Time: 15:38
 */

namespace frontend\models;


class Notification extends \common\models\Notification
{
    /**
     *
     */
    public function afterFind()
    {
        $this->created_at = date('d.m.Y', $this->created_at);
        parent::afterFind();
    }
}