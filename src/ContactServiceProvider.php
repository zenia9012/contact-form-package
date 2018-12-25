<?php

namespace Yevhenii\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ .'/routes/web.php');
        $this->loadViewsFrom(__DIR__ .'/resources/views', 'contact');
        $this->loadMigrationsFrom(__DIR__ .'/database/migrations');
        $this->mergeConfigFrom(__DIR__ . '/config/contact.php', 'contact');

        $this->publishes([__DIR__. '/config/contact.php' => config_path('contact-form.php')]);
        $this->publishes([__DIR__. '/resources/views/' => resource_path('views/vendor/contact-form')]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
