<?php

use yii\db\Migration;

/**
 * Class m180921_045356_change_content_column_in_session_table
 */
class m180921_045356_change_content_column_in_session_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('session', 'title', 'title_kz');
        $this->renameColumn('session', 'title_url', 'title_url_kz');
        $this->renameColumn('session', 'content', 'content_kz');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameColumn('session', 'title_kz','title');
        $this->renameColumn('session', 'title_url_kz','title_url');
        $this->renameColumn('session', 'content_kz','content');
    }
}
