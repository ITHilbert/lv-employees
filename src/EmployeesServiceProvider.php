<?php

namespace ITHilbert\Employees;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

class EmployeesServiceProvider extends ServiceProvider
{
    /**
     * @var string $moduleName
     */
    protected $moduleName = 'Employees';

    /**
     * @var string $moduleNameLower
     */
    protected $moduleNameLower = 'employees';

    protected $loadFromPackage = true;

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        /* $this->registerFactories(); */
        $this->loadMigrationsFrom(__DIR__ . '/Database/Migrations');

        /* $this->registerCommands();  */
        $this->registerRoutes();

        $this->publishAssets();

        $this->registerMiddleware();
    }


    public function registerMiddleware(){
        //$this->app['router']->aliasMiddleware('hasPermissionAnd' , \ITHilbert\UserAuth\Http\Middleware\hasPermissionAnd::class);
    }


    public function publishAssets()
    {
        $this->publishes([
            __DIR__ .'/Resources/assets' => public_path('vendor/employees'),
        ]);
    }



    /**
     * Register Routes.
     *
     * @return void
     */
    protected function registerRoutes()
    {
        $this->loadRoutesFrom(__DIR__ . '/Routes/web.php');
    }

    /**
     * Register commands.
     *
     * @return void
     */
    protected function registerCommands()
    {
        /* $this->commands(\Modules\Userauth\Console\PublishCommand::class); */
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
       /*  $this->app->register(RouteServiceProvider::class); */
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__ .'/Config/config.php' => config_path('employees.php'),
        ]); //, 'config');
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $this->publishes([
            __DIR__ .'/Resources/views' => resource_path('views/vendor/employees')
        ]);

        if($this->loadFromPackage === true){
            $this->loadViewsFrom(__DIR__ .'/Resources/views', 'employees');
        }else{
            $this->loadViewsFrom(resource_path('Resources/views/vendor/employees'), 'employees');
        }
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $this->publishes([
            __DIR__.'/Resources/lang' => resource_path('lang/vendor/employees'),
        ]);

        if($this->loadFromPackage === true){
            $this->loadTranslationsFrom( __DIR__ .'/Resources/lang', 'employees');
        }else{
            $this->loadTranslationsFrom( resource_path('/Resources/lang/vendor/employees'), 'employees');
        }
    }

    /**
     * Register an additional directory of factories.
     *
     * @return void
     */
    public function registerFactories()
    {
        /* if (! app()->environment('production') && $this->app->runningInConsole()) {
            app(Factory::class)->load(module_path($this->moduleName, 'Database/factories'));
        } */
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

}
