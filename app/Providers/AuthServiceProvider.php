<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Policies\UserPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        User::class => UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // تعريف الصلاحيات باستخدام Gate
        Gate::define('isVisitor', [UserPolicy::class, 'isVisitor']);
        Gate::define('isEmployee', [UserPolicy::class, 'isEmployee']);
        Gate::define('isAdmin', [UserPolicy::class, 'isAdmin']);
    }
}
