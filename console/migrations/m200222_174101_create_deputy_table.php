<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%deputy}}`.
 */
class m200222_174101_create_deputy_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%deputy}}', [
            'id' => $this->primaryKey(),
            'full_name_kz' => $this->string(200),
            'full_name_ru' => $this->string(200),
            'place_kz' => $this->string(300),
            'place_ru' => $this->string(300),
            'avatar' => $this->string(255),
            'created_at' => $this->integer(11),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%deputy}}');
    }
}
