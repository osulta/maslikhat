<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "image_with_description".
 *
 * @property int $id
 * @property string $description_kz
 * @property string $description_ru
 * @property string $type
 * @property string $image
 * @property int $created_at
 */
class ImageWithDescription extends \yii\db\ActiveRecord
{
    const SCENARIO_CREATE = 'create';
    const SLIDER = 'slider';
    const GALLERY = 'gallery';
    const INFOGRAPHICS = 'infographics';
    const ADVERT = 'advert';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'image_with_description';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at'], 'integer'],
            [['description_kz', 'description_ru', 'image'], 'string', 'max' => 255],
            [['type'], 'string', 'max' => 25],
            [['tmpImage'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
            [['tmpImage'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg', 'on' => self::SCENARIO_CREATE],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description_kz' => 'Описание на казахском',
            'description_ru' => 'Описание на русском',
            'type' => 'Type',
            'image' => 'Сурет',
            'tmpImage' => 'Сурет',
            'created_at' => 'Created At',
        ];
    }
}
