<?php

namespace Bambamboole\Wordpress;

use Illuminate\Support\ServiceProvider;

class WordpressServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/wordpress.php.php' => config_path('wordpress.php'),
        ], 'config');
    }
}
