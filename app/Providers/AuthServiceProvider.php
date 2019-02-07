<?php

namespace App\Providers;

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
        'App\Inscription'    => 'App\Policies\InsPolicy',
        
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
            /*
            Gate::define('admin_only', function ($user) {
                if ($user->is_admin == 1) {
                    return true;
                }
            return false;
        });*/

        Gate::define('admin_only', 'App\Policies\InsPolicy@admin_only');

        Gate::define('admin_pro', 'App\Policies\InsPolicy@admin_pro');

        

        //Gate::resource('admin_only', 'App\Policies\InsPolicy');
    }
}
