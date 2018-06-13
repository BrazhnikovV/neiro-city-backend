<?php

use yii\db\Migration;

/**
 * Class m180115_143038_init_downloads_table
 */
class m180115_143038_init_downloads_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('tbl_processing', [
            'id'          => $this->primaryKey(11),
            'name'        => $this->string(64),
            'tour'        => $this->string(256),
            'date'        => $this->string(256),
            'team_home'   => $this->string(256),
            'team_away'   => $this->string(256),
            'score'       => $this->string(256),
            'score_first' => $this->string(256),
            'stadium'     => $this->string(256),
            'count_peoples'     => $this->string(256),
            'main_players_home' => $this->string(256),
            'main_players_away' => $this->string(256),
            'reserv_players_home' => $this->string(256),
            'reserv_players_away' => $this->string(256),
            'player_name'   => $this->string(256),
            'player_number' => $this->string(256),
            'coach_home'   => $this->string(256),
            'coach_away'   => $this->string(256),
            'yellow_card'  => $this->string(256),
            'red_card'     => $this->string(256),
            'yel_red_card' => $this->string(256),
            'penalty_yes'  => $this->string(256),
            'penalty_no'   => $this->string(256),
            'autogoal'     => $this->string(256),
            'country'      => $this->string(256),
            'out_match'    => $this->string(256),
            'in_match'     => $this->string(256),
            'match_events' => $this->string(256),
            'goal'         => $this->string(256),            
            'weather'      => $this->string(256),            
            'statistics'   => $this->string(256),
            'created'      => $this->dateTime(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('tbl_processing');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180115_143038_init_downloads_table cannot be reverted.\n";

        return false;
    }
    */
}
