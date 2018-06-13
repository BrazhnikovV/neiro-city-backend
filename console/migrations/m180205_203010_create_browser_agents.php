<?php

use yii\db\Migration;

/**
 * Class m180205_203010_create_browser_agents
 */
class m180205_203010_create_browser_agents extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('tbl_browser_agents', [
            'id'          => $this->primaryKey(11),
            'agent'        => $this->string(256),
        ]);

        $tbl_name = 'tbl_browser_agents';

        $this->insert($tbl_name, [
            'agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)'
        ]);
        $this->insert($tbl_name, [
            'agent' => 'Yandex/1.01.001 (compatible; Win16; I)'
        ]);
        $this->insert($tbl_name, [
            'agent' => 'Mozilla/5.0 (compatible; Yahoo! Slurp; http://help.yahoo.com/help/us/ysearch/slurp)'
        ]);
        $this->insert($tbl_name, [
            'agent' => 'WebAlta Crawler/1.3.12 (http://www.webalta.ru/bot.html) (Windows; U; Windows NT 5.1; ru-RU)'
        ]);
        $this->insert($tbl_name, [
            'agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)'
        ]);
        $this->insert($tbl_name, [
            'agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322)'
        ]);
        $this->insert($tbl_name, [
            'agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)'
        ]);
        $this->insert($tbl_name, [
            'agent' => 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'
        ]);
        $this->insert($tbl_name, [
            'agent' => 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)'
        ]);
        $this->insert($tbl_name, [
            'agent' => 'TurtleScanner/1.4 (compatible; Win16; S)'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('tbl_browser_agents');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180205_203010_create_browser_agents cannot be reverted.\n";

        return false;
    }
    */
}
