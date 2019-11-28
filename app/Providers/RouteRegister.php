<?php

namespace App\Providers;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

class RouteRegister
{

    protected $namespace = 'App\Http\Controllers';

    public function bind(Application $app)
    {
        // API Routes
        $this->mapApiRoutes();
        $this->mapCompanyApiRoutes();
        $this->mapMasterApiRoutes();

        // Web Routes
        $this->mapWebRoutes();
    }

    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }


    // API Routes
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }

    protected function mapMasterApiRoutes()
    {
        Route::middleware('api')
            ->prefix('api/master')
            ->namespace($this->namespace . '\Master')
            ->group(base_path('routes/api/master.php'));
    }

    protected function mapCompanyApiRoutes()
    {
        Route::middleware('api')
            ->prefix('api/crm/companies')
            ->namespace($this->namespace . '\Crm')
            ->group(base_path('routes/api/crm/company.php'));
    }
}
