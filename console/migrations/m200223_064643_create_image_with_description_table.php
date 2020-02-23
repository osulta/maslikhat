<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%image_with_description}}`.
 */
class m200223_064643_create_image_with_description_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%image_with_description}}', [
            'id' => $this->primaryKey(),
            'description_kz' => $this->string(255),
            'description_ru' => $this->string(255),
            'type' => $this->string(25),
            'image' => $this->string(255),
            'created_at' => $this->integer(11),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%image_with_description}}');
    }
}
