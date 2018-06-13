<?php

use backend\models\Sources;
use Yii;

class SourcesCreateTest extends \Codeception\Test\Unit
{
    /**
     * @var \FunctionalTester
     */
    /*
    protected $tester;

    protected function _before()
    {
        
    }

    protected function _after()
    {
    }

    // tests
    public function testSourcesCreate()
    {
        $faker = \Faker\Factory::create();

        $source = new Sources();

        $source->process_id       = $faker->unique()->randomDigitNotNull;
        $source->name_source      = $faker->realText(20);
        $source->source_address   = $faker->url(100);
        $source->events_address   = $faker->url(100);
        $source->calendar_address = $faker->url(100);
        $source->referer_address  = $faker->url(100);
        $source->download_report  = $this->generateDownloadReport();

        $this->assertNotNull($this->tester);
        $this->assertFalse(!$source->save(),'==========>>> Error save! <<<===========');        
    }

    // tests
    public function testRulesRequire()
    {
        $faker = \Faker\Factory::create();

        $source = new Sources();

        $source->process_id       = null;
        $source->name_source      = null;
        $source->source_address   = null;
        $source->events_address   = null;
        $source->calendar_address = null;
        $source->referer_address  = null;
        $source->download_report  = null;
        $source->created          = null;

        $this->assertNotNull($this->tester);
        $this->assertFalse($source->save(),'==========>>> Error in rules require! <<<===========');
    }

    // tests
    public function testRulesUrlAndIntegerAndDate()
    {
        $faker = \Faker\Factory::create();

        $source = new Sources();

        $source->process_id       = 'asasasas';
        $source->name_source      = 123;
        $source->source_address   = $faker->realText(100);
        $source->events_address   = $faker->realText(100);
        $source->calendar_address = $faker->realText(100);
        $source->referer_address  = $faker->realText(100);
        $source->download_report  = $this->generateDownloadReport();
        $source->created          = 123;

        $this->assertNotNull($this->tester);
        $this->assertFalse($source->save(),'==========>>> Error in rules : url && int && date! <<<===========');
    }

    private function generateDownloadReport()
    {
        $faker = \Faker\Factory::create();        
        $return_array = array();
        for ( $i = 0; $i < 380; $i++ ) {

            $this->tester = array(
                'tour' => $i,
                'datetime' => $faker->date('Y-m-d H:i:s'),
                'url' => $faker->url(75)
            );

            $return_array[] = $this->tester;
        }

        return json_encode($return_array);
    }
    */
}