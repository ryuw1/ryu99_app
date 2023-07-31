<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Infrastructure\TaxCalcInterface;
use Infrastructure\TaxCalclator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TaxCalcInterface::class,TaxCalclator::class);
        $this->app->bind(TotalInterface::class,TotalCalclator::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
