<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "info".
 *
 * @property int $id
 * @property string $title
 * @property string $title_url
 * @property string $content
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
            [['title', 'title_url', 'parent'], 'required'],
            [['content', 'parent'], 'string'],
            [['date'], 'safe'],
            [['created_at'], 'integer'],
            [['title', 'title_url'], 'string', 'max' => 500],
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
            'date' => 'Өткізілген күні',
            'created_at' => 'Created At',
            'parent' => 'Меню',
        ];
    }
}
