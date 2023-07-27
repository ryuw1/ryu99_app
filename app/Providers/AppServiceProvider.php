<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            \Infrastructure\Total::class,
            \Infrastructure\SumCalculator::class
        );
        $this->app->bind(
            \Infrastructure\TaxCalcEx::class,
            \Infrastructure\TaxExtractor::class
        );
        $this->app->bind(
            \Infrastructure\TaxCalcIn::class,
            \Infrastructure\TaxIncluded::class
        );
        $this->app->bind(
            \Infrastructure\IncludingTaxFromTaxExcludedInterface::class,
            \Infrastructure\IncludingTaxFromTaxExcluded::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
