<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\LoginRepositoryInterface;
use App\Repositories\Interfaces\RegisterRepositoryInterface;
use App\Repositories\LoginRepository;
use App\Repositories\RegisterRepository;
use App\Repositories\Interfaces\AccountRepositoryInterface;
use App\Repositories\AccountRepository;
use App\Repositories\Interfaces\ProfileRepositoryInterface;
use App\Repositories\ProfileRepository;

use App\Services\Interfaces\LoginServiceInterface;
use App\Services\Interfaces\RegisterServiceInterface;
use App\Services\Interfaces\ProfileServiceInterface;
use App\Services\LoginService;
use App\Services\RegisterService;
use App\Services\ProfileService;

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
        $this->app->bind(AccountRepositoryInterface::class, AccountRepository::class);
        $this->app->bind(ProfileRepositoryInterface::class, ProfileRepository::class);
        
        $this->app->bind(RegisterServiceInterface::class, RegisterService::class);
        $this->app->bind(LoginServiceInterface::class, LoginService::class);
        $this->app->bind(ProfileServiceInterface::class, ProfileService::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

class ProfileServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(ProfileRepositoryInterface::class, ProfileRepository::class);
        $this->app->bind(ProfileServiceInterface::class, ProfileService::class);
    }
}
