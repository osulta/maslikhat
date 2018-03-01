<?php

use yii\db\Migration;

/**
 * Class m180228_105052_create_sessiya
 */
class m180228_105052_create_session_table extends Migration
{
    public function up()
    {
        $this->createTable('session', [
            'id' => $this->primaryKey(),
            'title' => $this->string(500)->notNull(),
            'title_url' => $this->string(500)->notNull(),
            'content' => $this->text(),
            'preview_image' => $this->string(255),
            'date' => $this->date(),
            'created_at' => $this->integer(11),
        ]);
    }

    public function down()
    {
        $this->dropTable('session');
    }
}
