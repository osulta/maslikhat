<?php

use yii\db\Migration;

/**
 * Handles adding contentruRU to table `info`.
 */
class m180921_041042_add_contentruRU_column_to_info_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('info', 'title_ru', $this->text()->after('title_kz'));
        $this->addColumn('info', 'title_url_ru', $this->text()->after('title_url_kz'));
        $this->addColumn('info', 'content_ru', $this->text()->after('content_kz'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('info', 'title_ru');
        $this->dropColumn('info', 'title_url_ru');
        $this->dropColumn('info', 'content_ru');
    }
}
