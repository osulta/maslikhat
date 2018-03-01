<?php

namespace backend\components;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;

class MyHelperComponent extends Component
{
    public static function transliterateToLatin($string)
    {
        $string = (string) $string;
        $string = substr($string, 0, 500);
        $string = strip_tags($string);
        $string = str_replace(array("\n", "\r"), " ", $string);
        $string = preg_replace("/\s+/", ' ', $string);
        $string = trim($string);
        $string = function_exists('mb_strtolower') ? mb_strtolower($string) : strtolower($string);
        $string = strtr($string, array('а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>''));
        $string = preg_replace("/[^0-9a-z-_ ]/i", "", $string);
        $string = str_replace(" ", "-", $string);
        return $string;
    }
}