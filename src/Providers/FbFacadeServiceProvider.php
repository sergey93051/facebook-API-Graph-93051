<?php

namespace Fbvendor\Grathapi\Providers;

use Illuminate\Support\ServiceProvider;
use Fbvendor\Grathapi\Graph\App;


class FbFacadeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Fb', function() {             
             return new App();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       
    }
}
