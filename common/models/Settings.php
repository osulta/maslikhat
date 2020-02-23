<?php

namespace common\models;

/**
 * This is the model class for table "settings".
 *
 * @property int $id
 * @property string $name
 * @property string $content_kz
 * @property string $content_ru
 */
class Settings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'settings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 200],
            [['content_kz', 'content_ru'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'content_kz' => 'Значение на казахском',
            'content_ru' => 'Значение на русском',
        ];
    }
}
