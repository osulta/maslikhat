<?php

use yii\db\Migration;

/**
 * Handles adding parent to table `info`.
 */
class m180302_064135_add_parent_column_to_info_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->addColumn('info', 'parent', $this->string('255')->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropColumn('info', 'parent');
    }
}
