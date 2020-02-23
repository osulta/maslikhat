<?php

use yii\db\Migration;

/**
 * Class m200222_163436_add_content_ru_to_settings_table
 */
class m200222_163436_add_content_ru_to_settings_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('settings', 'content_ru', $this->string(500));
        $this->renameColumn('settings', 'content', 'content_kz');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('settings', 'content_ru');
        $this->renameColumn('settings', 'content_kz', 'content');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200222_163436_add_content_ru_to_settings_table cannot be reverted.\n";

        return false;
    }
    */
}
