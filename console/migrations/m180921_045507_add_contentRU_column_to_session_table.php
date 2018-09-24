<?php

use yii\db\Migration;

/**
 * Handles adding contentRU to table `session`.
 */
class m180921_045507_add_contentRU_column_to_session_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('session', 'title_ru', $this->text()->after('title_kz'));
        $this->addColumn('session', 'title_url_ru', $this->text()->after('title_url_kz'));
        $this->addColumn('session', 'content_ru', $this->text()->after('content_kz'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('session', 'title_ru');
        $this->dropColumn('session', 'title_url_ru');
        $this->dropColumn('session', 'content_ru');
    }
}
