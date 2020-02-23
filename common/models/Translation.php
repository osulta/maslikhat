<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "translation".
 *
 * @property int $id
 * @property string $title_kz
 * @property string $title_ru
 * @property string $video
 */
class Translation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'translation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_kz', 'title_ru', 'video'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_kz' => 'Заголовок на казахском',
            'title_ru' => 'Заголовок на русском',
            'video' => 'Видео',
        ];
    }
}
