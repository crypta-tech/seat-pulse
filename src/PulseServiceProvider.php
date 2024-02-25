<?php

namespace CryptaTech\Seat\Pulse;

use Seat\Services\AbstractSeatPlugin;
use Illuminate\Support\Facades\Gate;


class PulseServiceProvider extends AbstractSeatPlugin
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Want pulse only visible to superusers :)
        Gate::define('viewPulse', 'Seat\Web\Acl\Policies\GlobalPolicy@superuser');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/Config/package.sidebar.settings.php', 'package.sidebar.settings.entries');
    }


    /**
     * Return the plugin public name as it should be displayed into settings.
     *
     * @example SeAT Web
     *
     * @return string
     */
    public function getName(): string
    {
        return 'SeAT Pulse';
    }


    /**
     * Return the plugin repository address.
     *
     * @example https://github.com/eveseat/web
     *
     * @return string
     */
    public function getPackageRepositoryUrl(): string
    {
        return 'https://github.com/crypta-tech/seat-pulse';
    }

    /**
     * Return the plugin technical name as published on package manager.
     *
     * @example web
     *
     * @return string
     */
    public function getPackagistPackageName(): string
    {
        return 'seat-pulse';
    }

    /**
     * Return the plugin vendor tag as published on package manager.
     *
     * @example eveseat
     *
     * @return string
     */
    public function getPackagistVendorName(): string
    {
        return 'cryptatech';
    }
}
