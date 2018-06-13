<?php

use yii\db\Migration;

/**
 * Class m180118_180855_users_table
 */
class m180118_180855_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('tbl_users', [
            'id'        => 'pk',
            'username'  => 'string UNIQUE',            
            'password'  => 'string',
            'auth_key'  => 'string UNIQUE',
            'created'   => $this->dateTime(),
        ]);

        $this->insert('tbl_users', [
            'username' => 'RobAdmin',
            'password' => '$2y$13$Sb3ZQfAPJf9pN7laRNi/u...gwjYo4IorVeAxA5FxzUt403w8W1vO'
        ]);

        $this->insert('tbl_users', [
            'username' => 'AnnieManager',
            'password' => '$2y$13$Sb3ZQfAPJf9pN7laRNi/u...gwjYo4IorVeAxA5FxzUt403w8W1vO'
        ]);
        
        $this->insert('tbl_users', [
            'username' => 'JoeUser',
            'password' => '$2y$13$Xw.JzmteBN2wRRp.uRlN5eCWMj4kVzGe0xQ.ucny8i7dOHhxFYzH2'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->delete('tbl_users', [
            'username' => 'RobAdmin',
            'password' => '$2y$13$Sb3ZQfAPJf9pN7laRNi/u...gwjYo4IorVeAxA5FxzUt403w8W1vO'
        ]);

        $this->delete('tbl_users', [
            'username' => 'AnnieManager',
            'password' => '$2y$13$Sb3ZQfAPJf9pN7laRNi/u...gwjYo4IorVeAxA5FxzUt403w8W1vO'
        ]);
        
        $this->delete('tbl_users', [
            'username' => 'JoeUser',
            'password' => '$2y$13$Xw.JzmteBN2wRRp.uRlN5eCWMj4kVzGe0xQ.ucny8i7dOHhxFYzH2'
        ]);

        $this->dropTable('tbl_downloads');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180118_180855_users_table cannot be reverted.\n";

        return false;
    }
    */
}
