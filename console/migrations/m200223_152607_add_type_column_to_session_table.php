<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%session}}`.
 */
class m200223_152607_add_type_column_to_session_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%session}}', 'type', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%session}}', 'type');
    }
}
