<?php

namespace Wanglelecc\Ycms;

use Illuminate\Support\ServiceProvider;

class YcmsServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected $commands = [
        'Encore\Admin\Console\MakeCommand',
        'Encore\Admin\Console\MenuCommand',
        'Encore\Admin\Console\InstallCommand',
        'Encore\Admin\Console\UninstallCommand',
        'Encore\Admin\Console\ImportCommand',
    ];

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        // 检测是否在命令行模式
        if ($this->app->runningInConsole()) {

            // 注册 Artisan 命令行
            $this->commands($this->commands);
        }


        // 注册视图文件位置  view('ycms::admin');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'ycms');

        // 注册路由
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // 注册 Migrate  php artisan migrate
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // 加载语言包 echo trans('ycms::messages.welcome');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'ycms');

        // 发布配置文件 config('ycms.option');
        // $this->publishes([__DIR__.'/../config' => config_path()], 'laravel-ycms-config');

        // 发布视图文件到应用目录
        $this->publishes([__DIR__.'/../resources/views' => resource_path('views/vendor/ycms')],'laravel-ycms-views');

        // 发布 Assets = php artisan vendor:publish --tag=laravel-ycms-assets
        $this->publishes([__DIR__.'/../resources/assets' => public_path('vendor/ycms')], 'laravel-ycms-assets');

//        $this->publishes([__DIR__.'/../resources/lang' => resource_path('lang')], 'laravel-ycms-lang');
//        $this->publishes([__DIR__.'/../database/migrations' => database_path('migrations')], 'laravel-ycms-migrations');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // 合并配置文件
        $this->mergeConfigFrom(
            __DIR__.'/../config/ycms.php', 'ycms'
        );
    }
}
