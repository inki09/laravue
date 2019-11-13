<?php
/**
 * Created by PhpStorm.
 * User: Allur-11
 * Date: 06/11/2019
 * Time: 10:13
 */

namespace App\Providers;


use Illuminate\Support\ServiceProvider;

class BackEndServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Manager\PostManagerInterface',
            'App\Manager\PostManager'
        );

        $this->app->bind(
                'App\Manager\MapManager\MapManagerInterface',
                'App\Manager\MapManager\MapManager'
        );
    }

}
