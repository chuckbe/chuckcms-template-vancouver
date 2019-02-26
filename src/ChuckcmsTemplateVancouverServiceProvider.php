<?php

namespace Chuckbe\ChuckcmsTemplateVancouver;

use Chuckbe\ChuckcmsTemplateVancouver\Commands\PublishVancouver;

use Illuminate\Support\ServiceProvider;

class ChuckcmsTemplateVancouverServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {   

        if ($this->app->runningInConsole()) {
            $this->commands([
                PublishVancouver::class,
            ]);
        }
        //php artisan chuckcms-template-vancouver:publish
        //php artisan vendor:publish --tag=chuckcms-template-vancouver-public --force
        $this->publishes([
            __DIR__.'/resources' => public_path('chuckbe/chuckcms-template-vancouver'),
        ], 'chuckcms-template-vancouver-public');

        // $this->publishes([
        //     __DIR__ . '/config/chuckcms-template-vancouver.php' => config_path('chuckcms-template-vancouver'),
        // ], 'chuckcms-template-vancouver-config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'chuckcms-template-vancouver');

        // $this->mergeConfigFrom(
        //     __DIR__ . '/config/chuckcms-template-vancouver.php', 'chuckcms-template-vancouver-config'
        // );
    }
}
