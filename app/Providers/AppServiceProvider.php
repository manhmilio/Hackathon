<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\LoginRepositoryInterface;
use App\Repositories\Interfaces\RegisterRepositoryInterface;
use App\Repositories\LoginRepository;
use App\Repositories\RegisterRepository;

use App\Services\Interfaces\LoginServiceInterface;
use App\Services\Interfaces\RegisterServiceInterface;
use App\Services\LoginService;
use App\Services\RegisterService;

use App\Models\Account;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(RegisterRepositoryInterface::class, RegisterRepository::class);
        $this->app->bind(LoginRepositoryInterface::class, LoginRepository::class);
        
        $this->app->bind(RegisterServiceInterface::class, RegisterService::class);
        $this->app->bind(LoginServiceInterface::class, LoginService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
