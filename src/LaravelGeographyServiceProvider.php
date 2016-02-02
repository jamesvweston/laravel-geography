<?php

namespace JamesVweston\LaravelGeography;

use Illuminate\Support\ServiceProvider;

class LaravelGeographyServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupConfig();
        $this->setupMigrations();
        $this->setupSeeders();
    }

    /**
     * Setup the config.
     *
     * @return void
     */
    protected function setupConfig() {
        $configPath             =   realpath(__DIR__.'/../config/geography.php');

        if (function_exists('config_path')) {
            $publishPath        =   config_path('geography.php');
        } else {
            $publishPath        =   base_path('config/geography.php');
        }
        $this->publishes([$configPath => $publishPath], 'config');
    }

    /**
     * Setup the migrations.
     *
     * @return void
     */
    protected function setupMigrations()
    {
        $sourcePath             =   realpath(__DIR__.'/../database/migrations/');

        $this->publishes([$sourcePath => database_path('migrations')], 'migrations');
    }

    protected function setupSeeders()
    {
        $sourcePath             =   realpath(__DIR__.'/../database/seeds/');

        $this->publishes([$sourcePath => database_path('seeds')], 'seeds');
    }

}