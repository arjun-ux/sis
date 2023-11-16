<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // mendefinisikan user role

        Gate::define('isAdmin', function ($user) {
            return $user->roles->role_name == 'admin';
        });
        Gate::define('isSiswa', function ($siswa) {
            return $siswa->roles->role_name == 'siswa';
        });
    }
}
