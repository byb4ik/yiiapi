<?php

use yii\db\Migration;

/**
 * Class m190303_165744_insert_users
 */
class m190303_165744_insert_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('users', [
            'id' => '100',
            'username' => 'admin',
            'password' => 'admin',
            'authKey' => '100admin',
            'accessToken' => '100token100',
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190303_165744_insert_users cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190303_165744_insert_users cannot be reverted.\n";

        return false;
    }
    */
}
