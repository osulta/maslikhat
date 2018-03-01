<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "session".
 *
 * @property int $id
 * @property string $title
 * @property string $title_url
 * @property string $content
 * @property string $preview_image
 * @property string $date
 * @property int $created_at
 */
class Session extends \yii\db\ActiveRecord
{
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
            [['title', 'title_url'], 'required'],
            [['content'], 'string'],
            [['date'], 'safe'],
            [['created_at'], 'integer'],
            [['title', 'title_url'], 'string', 'max' => 500],
            [['preview_image'], 'string', 'max' => 255],
            [['previewImage'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'title_url' => 'Title Url',
            'content' => 'Содержимое',
            'preview_image' => 'Preview Image',
            'date' => 'Дата',
            'created_at' => 'Created At',
            'previewImage' => 'Превью-картинка',
        ];
    }
}
