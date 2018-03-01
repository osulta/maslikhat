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
            [['title', 'title_url'], 'required'],
            [['content'], 'string'],
            [['date'], 'safe'],
            [['created_at'], 'integer'],
            [['title', 'title_url'], 'string', 'max' => 500],
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
            'title' => 'Тақырып',
            'title_url' => 'Title Url',
            'content' => 'Мазмұны',
            'preview_image' => 'Preview Image',
            'date' => 'Өткізілген күні',
            'created_at' => 'Created At',
            'previewImage' => 'Кішігірім сурет',
            'type' => 'Жаңа сессия әлде сессия мәліметі ме?',
        ];
    }
}
