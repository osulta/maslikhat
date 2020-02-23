<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 01.03.2018
 * Time: 15:38
 */

namespace frontend\models;


class Article extends \common\models\Session
{
    /**
     *
     */
    public function afterFind()
    {
        $this->date = date('d.m.Y', strtotime($this->date));
        if ($this->preview_image === NULL) {
            $this->preview_image = '300x200.png';
        }
        parent::afterFind();
    }
}