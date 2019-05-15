<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ReportServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Abstractions\IReportService',
            'App\Services\ReportService'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
