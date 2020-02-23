<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "deputy".
 *
 * @property int $id
 * @property string $full_name_kz
 * @property string $full_name_ru
 * @property string $place_kz
 * @property string $place_ru
 * @property string $avatar
 * @property int $created_at
 */
class Deputy extends \yii\db\ActiveRecord
{
    const SCENARIO_CREATE = 'create';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deputy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name_kz', 'full_name_ru', 'place_kz', 'place_ru'], 'required'],
            [['created_at'], 'integer'],
            [['full_name_kz', 'full_name_ru'], 'string', 'max' => 200],
            [['place_kz', 'place_ru'], 'string', 'max' => 300],
            [['avatar'], 'string', 'max' => 255],
            [['image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
            [['image'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg', 'on' => self::SCENARIO_CREATE],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name_kz' => 'Аты-жөні',
            'full_name_ru' => 'ФИО',
            'place_kz' => 'Жұмыс орны',
            'place_ru' => 'Место работы',
            'avatar' => 'Фото',
            'image' => 'Фото',
            'created_at' => 'Created At',
        ];
    }
}
