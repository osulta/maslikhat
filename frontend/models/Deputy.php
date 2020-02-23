<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 01.03.2018
 * Time: 15:38
 */

namespace frontend\models;


class Deputy extends \common\models\Deputy
{
    /**
     *
     */
    public function afterFind()
    {
        if ($this->avatar === NULL) {
            $this->avatar = '300x200.png';
        }
        parent::afterFind();
    }
}