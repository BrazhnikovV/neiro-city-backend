<?php

use yii\db\Migration;

/**
 * Class m180115_131830_init_sources_load_table
 */
class m180115_131830_init_sources_load_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('tbl_sources', [
            'id'               => $this->primaryKey(),
            'process_id'       => $this->integer()->notNull(),
            //'load_type'       => 'ENUM("match", "calendar")',
            'name_source'      => $this->string()->notNull(),
            'source_address'   => $this->string()->notNull(),
            'calendar_address' => $this->string()->notNull(),
            'events_address'   => $this->string()->notNull(),
            'referer_address'  => $this->string()->notNull(),
            'download_report'  => $this->string(32768)->notNull(),
            'created'          => $this->dateTime()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('tbl_sources');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180115_131830_init_sources_load_table cannot be reverted.\n";

        return false;
    }
    */
}
