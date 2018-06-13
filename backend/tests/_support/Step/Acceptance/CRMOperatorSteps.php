<?php
namespace Step\Acceptance;

class CRMOperatorSteps extends \AcceptanceTester
{
    function amInMainAppPage() {
        $I = $this;
        $I->amOnPage('/');
    }

    function amInListDownloads() {
        $I = $this;
        $I->amOnPage('/downloads');
    }

    function amInListSources() {
        $I = $this;
        $I->amOnPage('/sources');
    }

    function amInAddUser() {
        $I = $this;
        $I->amOnPage('/users/create');
    }

    function amInListProcessing() {
        $I = $this;
        $I->amOnPage('/processing');
    }    

    function submitCreate() {
        $I = $this;
        $I->click('Create Sources');
    }

    function submitSave() {
        $I = $this;
        $I->click('Save');
    }

    function submitLogin() {
        $I = $this;
        $I->click('Login');
    }

    function submitCreateProcessing() {
        $I = $this;
        $I->click('Create Processing');
    }

    function seeAmInLoginFormUi() {
        $I = $this;

        $I->seeCurrentUrlEquals('/site/login');
    }

    function seeIAmAtHomePage() {
        $I = $this;

        $I->seeCurrentUrlEquals('/');
    }

    function seeUsername($user) {
        $I = $this;

        $I->see($user['#userrecord-username']);
    }

    function dontSeeUsername($user) {
        $I = $this;

        $I->dontSee($user['#userrecord-username']);
    }

    function imagineUser() {
        $faker = \Faker\Factory::create();

        return [
            '#userrecord-username' => $faker->word,
            '#userrecord-password' => md5(time()),
            '#userrecord-auth_key' => md5(uniqid(rand(),1)),
            '#userrecord-created'  => $faker->date('Y-m-d h:m:s')
        ];
    } 
    
    function imagineSource() {
        $faker = \Faker\Factory::create();

        return [
            '#sources-process_id'      => $faker->unique()->randomDigit,
            '#sources-name_source'     => $faker->sentence(1),
            '#sources-source_address'  => $faker->url(),
            '#sources-events_address'  => $faker->url(),
            '#sources-referer'         => $faker->url(),
            '#sources-user_agent'      => $faker->userAgent(),
            '#sources-selector_events' => '/dfdf/dfdf',
            '#sources-created'         => $faker->date('Y-m-d')
        ];
    }    

    function imagineProcessing() {
        $faker = \Faker\Factory::create();

        return [
            '#processing-tour'          => $faker->unique()->randomDigit,
            '#processing-date'          => $faker->date('Y-m-d'),
            '#processing-team_home'     => $faker->url(),
            '#processing-team_away'     => $faker->url(),
            '#processing-score'         => $faker->url(),
            '#processing-score_first'   => $faker->url(),
            '#processing-stadium'       => $faker->url(),
            '#processing-count_peoples' => $faker->url(),
            '#processing-main_players_home'   => $faker->url(),
            '#processing-main_players_away'   => $faker->url(),
            '#processing-reserv_players_home' => $faker->url(),
            '#processing-reserv_players_away' => $faker->url(),
            '#processing-player_name'   => $faker->url(),
            '#processing-player_number' => $faker->url(),
            '#processing-coach_home'    => $faker->url(),
            '#processing-coach_away'    => $faker->url(),
            '#processing-yellow_card'   => $faker->url(),
            '#processing-red_card'      => $faker->url(),
            '#processing-yel_red_card'  => $faker->url(),
            '#processing-penalty_yes'   => $faker->url(),
            '#processing-penalty_no'    => $faker->url(),
            '#processing-autogoal'      => $faker->url(),
            '#processing-country'       => $faker->url(),
            '#processing-out_match'     => $faker->url(),
            '#processing-in_match'      => $faker->url(),
            '#processing-match_events'  => $faker->url(),
            '#processing-goal'          => $faker->url(),
            '#processing-weather'       => $faker->url(),
            '#processing-statistics'    => $faker->url(),
            '#processing-created'       => $faker->date('Y-m-d')
        ];
    }
    
    function fillLoginForm($user) {

        $I = $this;

        $I->fillField('#loginform-username', $user['#userrecord-username']);
        $I->fillField('#loginform-password', $user['#userrecord-password']);
    }

    function fillLoginFormAdmin() {

        $I = $this;

        $I->fillField('#loginform-username', 'RobAdmin');
        $I->fillField('#loginform-password', 'admin');
    }

    function fillLoginFormManager() {

        $I = $this;

        $I->fillField('#loginform-username', 'AnnieManager');
        $I->fillField('#loginform-password', 'admin');
    }

    function fillLoginFormUser() {

        $I = $this;

        $I->fillField('#loginform-username', 'JoeUser');
        $I->fillField('#loginform-password', 'user');
    }

    function submitLoginForm() {
        $I = $this;

        $I->click('button[type=submit]');
        $I->wait(1);
    }

    function fillSourceDataForm($fielsData) {

        $faker = \Faker\Factory::create();
        $I = $this;


        $I->selectOption("#sources-load_type", 'match');

        foreach ( $fielsData as $key => $value ) {            
            $I->fillField($key, $value);
        }
    }

    function fillUserDateForm($fielsData) {

        $faker = \Faker\Factory::create();
        $I = $this;

        foreach ( $fielsData as $key => $value ) {            
            $I->fillField($key, $value);
        }
    }

    function fillProcessingDataForm($fielsData) {

        $faker = \Faker\Factory::create();
        $I = $this;

        foreach ( $fielsData as $key => $value ) {            
            $I->fillField($key, $value);
        }
    }

    //==========================================================================

    function submitCustomerDataForm() {
        $I = $this;
        $I->click('Submit');
    }

    function seeIAmInListCustomersUi() {
        $I = $this;
        $I->seeCurrentUrlMatches('/customers/');
    }

    function amInListCustomersUi() {
        $I = $this;
        $I->amOnPage('/customers');
    }
}