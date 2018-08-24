<?php

namespace BjornDCode\NovaAnalyticsTool\Tests;

use Illuminate\Support\Facades\Route;
use Orchestra\Testbench\TestCase as Orchestra;
use BjornDCode\NovaAnalyticsTool\AnalyticsToolServiceProvider;

abstract class TestCase extends Orchestra
{
    public function setUp()
    {
        parent::setUp();

        Route::middlewareGroup('nova', []);
    }

    protected function getPackageProviders($app)
    {
        return [
            AnalyticsToolServiceProvider::class,
        ];
    }
}
