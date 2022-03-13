<?php

namespace Fbvendor\Grathapi\Providers;

use Illuminate\Support\ServiceProvider;

class FbpublishesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/Fbconfig.php', 'fbconfig.php');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {                
        $this->publishes([
            __DIR__.'/../config/Fbconfig.php' => config_path('fbconfig.php'),
        ]);
    
    }
}
