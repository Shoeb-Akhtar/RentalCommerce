<?php

namespace shoebakhtar\rentalcommerce\Tests;

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        //$this->get('/');
        //$this->assertEquals(
            //$this->app->version(), $this->response->getContent() );
            $client = Client::create([
                'name'=>'one-year-membership',
                'description'=>'Granted to users'
            ]);

            $this->assertTrue($client->exists);
    }
}
