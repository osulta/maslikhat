<?php

use yii\db\Migration;

/**
 * Handles the creation of table `info`.
 */
class m180302_054238_create_info_table extends Migration
{
    public function up()
    {
        $this->createTable('info', [
            'id' => $this->primaryKey(),
            'title' => $this->string(500)->notNull(),
            'title_url' => $this->string(500)->notNull(),
            'content' => $this->text(),
            'date' => $this->date(),
            'created_at' => $this->integer(11),
        ]);
    }

    public function down()
    {
        $this->dropTable('info');
    }
}
