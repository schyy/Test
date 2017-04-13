<?php

namespace Test\Providers;


use Plenty\Plugin\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     */

     public function register()
     {
        $this->getApplication()->register(TestRouteServiceProvider::class);
     }
}
