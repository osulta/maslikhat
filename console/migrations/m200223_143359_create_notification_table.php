<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%notification}}`.
 */
class m200223_143359_create_notification_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%notification}}', [
            'id' => $this->primaryKey(),
            'short_desc_kz' => $this->string(255),
            'short_desc_ru' => $this->string(255),
            'description_kz' => $this->text(),
            'description_ru' => $this->text(),
            'image' => $this->string(255),
            'created_at' => $this->integer(11),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%notification}}');
    }
}
