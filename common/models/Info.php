<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "info".
 *
 * @property int $id
 * @property string $title_kz
 * @property string $title_ru
 * @property string $title_url_kz
 * @property string $title_url_ru
 * @property string $content_kz-KZ
 * @property string $content_ru
 * @property string $date
 * @property int $created_at
 * @property string $parent
 */
class Info extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_kz', 'title_url_kz', 'parent'], 'required'],
            [['content_kz', 'content_ru', 'parent'], 'string'],
            [['date'], 'safe'],
            [['created_at'], 'integer'],
            [['title_kz', 'title_url_kz', 'title_ru', 'title_url_ru'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_kz' => 'Тақырып қазақша',
            'title_ru' => 'Заголовок на русском',
            'title_url_kz' => 'Title Url',
            'title_url_ru' => 'Title Url',
            'content_kz' => 'Мазмұны қазақша',
            'content_ru' => 'Содержание на русском',
            'date' => 'Өткізілген күні',
            'created_at' => 'Created At',
            'parent' => 'Меню',
        ];
    }
}
