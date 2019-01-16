<?php

namespace App\Providers;

use App\Data;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->registerDataPolicies();
    }

    public function registerDataPolicies()
    {
        Gate::define('scout', function ($user) {
            return $user->hasAccess(['submit-data']);
        });
        Gate::define('view-data', function ($user) {
            return $user->hasAccess(['view-data']);
        });
        Gate::define('view-all-data', function ($user) {
            return $user->hasAccess(['view-all-data']);
        });
    }

}
