<?php

use yii\db\Migration;

class m150331_083437_rename_column_for_item_table extends Migration
{
    private $_table = 'item';

    public function up()
    {
        $this->renameColumn($this->_table, 's_akn', 's_invoice');
    }

    public function down()
    {
        $this->renameColumn($this->_table, 's_invoice', 's_akn');
    }
}
