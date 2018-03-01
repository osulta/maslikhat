<?php

use yii\db\Migration;

/**
 * Class m180301_081037_add_column_to_session
 */
class m180301_081037_add_column_to_session extends Migration
{
    public function up()
    {
        $this->addColumn('session', 'type', 'tinyint(1) unsigned not null');
    }

    public function down()
    {
        $this->dropColumn('session', 'type');
    }
}
