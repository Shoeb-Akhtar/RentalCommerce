<?php

namespace Beyondcode\mypackage\Tests;

use PhpUnit\Framework\TestCase;

class ExampleTest extends TestCase

{

    /** @test */

    public function create_package()
    {
        $package=Package::create([

            'name'=> 'one-year-membership',
            'description'=>'granted to users'
        ]);
        $this->assertTrue($package->exists);
    }
}