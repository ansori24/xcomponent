<?php

namespace Ansori24\Xcomponent\Tests;

use Orchestra\Testbench\TestCase;
use Ansori24\Xcomponent\XcomponentServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [XcomponentServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
