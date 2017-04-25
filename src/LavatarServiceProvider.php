<?php
namespace Lshorz\Lavatar;

use Lshorz\Lavatar\AvatarIdenticon;
use Illuminate\Support\ServiceProvider;
/**
 * Created by PhpStorm.
 * User: LSH
 * Date: 2017-4-24
 * Time: 15:35
 */
class LavatarServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Lavatar', function($app){
            return new AvatarIdenticon();
        });
    }
}