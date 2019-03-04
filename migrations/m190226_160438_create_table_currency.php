<?php

use yii\db\Migration;

/**
 * Class m190226_160438_create_table_currency
 */
class m190226_160438_create_table_currency extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('currency', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'rate' => $this->string()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('currency');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190226_160438_create_table_currency cannot be reverted.\n";

        return false;
    }
    */
}
