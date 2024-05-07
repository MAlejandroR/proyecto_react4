<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Schema;


use Inertia\Inertia;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
      /*El número 191 se deriva de 767 bytes divididos por 4 bytes por carácter (767/4 ≈ 191). Esto asegura que ningún índice único en campos de tipo string o varchar exceda el límite de bytes para MySQL.
       * */
       Schema::defaultStringLength(191);

    }
}
