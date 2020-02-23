<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 01.03.2018
 * Time: 15:38
 */

namespace frontend\models;


class Infographics extends \common\models\ImageWithDescription
{
    /**
     *
     */
    public function afterFind()
    {
        if ($this->image === NULL) {
            $this->image = '300x200.png';
        }
        parent::afterFind();
    }
}