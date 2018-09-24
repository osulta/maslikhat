<?php

use yii\db\Migration;

/**
 * Class m180921_040730_change_content_column_in_info_table
 */
class m180921_040730_change_content_column_in_info_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('info', 'title', 'title_kz');
        $this->renameColumn('info', 'title_url', 'title_url_kz');
        $this->renameColumn('info', 'content', 'content_kz');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameColumn('info', 'title_kz','title');
        $this->renameColumn('info', 'title_url_kz','title_url');
        $this->renameColumn('info', 'content_kz','content');
    }
}
