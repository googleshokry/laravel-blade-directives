<?php

namespace GoogleShokry\BladeDirectives\Test\Concerns;

use Illuminate\Support\Facades\View;

trait CreatesApplication
{
    protected function getPackageProviders($app)
    {
        return [
            \GoogleShokry\BladeDirectives\BladeDirectivesServiceProvider::class,
            \GoogleShokry\BladeDirectives\Test\App\Providers\RouteServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app->setBasePath(__DIR__.'/../laravel');
        View::addLocation(resource_path('views'));
    }
}
