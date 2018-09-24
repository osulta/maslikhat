<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "session".
 *
 * @property int $id
 * @property string $title_kz
 * @property string $title_ru
 * @property string $title_url_kz
 * @property string $title_url_ru
 * @property string $content_kz
 * @property string $content_ru
 * @property string $preview_image
 * @property string $date
 * @property int $created_at
 */
class Session extends \yii\db\ActiveRecord
{
    const SCENARIO_CREATE = 'create';
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'session';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_kz', 'title_url_kz'], 'required'],
            [['content_kz', 'content_ru'], 'string'],
            [['date'], 'safe'],
            [['created_at'], 'integer'],
            [['title_kz', 'title_ru', 'title_url_kz', 'title_url_ru'], 'string', 'max' => 500],
            [['preview_image'], 'string', 'max' => 255],
            [['previewImage'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
            [['previewImage'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg', 'on' => self::SCENARIO_CREATE],
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
            'preview_image' => 'Preview Image',
            'date' => 'Өткізілген күні',
            'created_at' => 'Created At',
            'previewImage' => 'Кішігірім сурет',
        ];
    }
}
