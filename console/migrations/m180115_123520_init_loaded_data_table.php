<?php

use yii\db\Migration;

/**
 * Class m180115_123520_init_loaded_data_table
 */
class m180115_123520_init_loaded_data_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('tbl_downloads', [
            'id'        => $this->primaryKey(),
            'source_id' => $this->integer()->notNull(),            
            'load_data' => $this->text(),
            'created'   => $this->dateTime(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('tbl_downloads');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180115_123520_init_loaded_data_table cannot be reverted.\n";

        return false;
    }
    */
}
