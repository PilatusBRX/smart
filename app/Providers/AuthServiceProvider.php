<?php

namespace App\Providers;
use App\Smart;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
         'App\Model' => 'App\Policies\ModelPolicy',
    ];




    public function boot()
    {
        $this->registerPolicies();

        Gate::define('edit-link',function($user, Smart $smart){
          return $user->id == $smart->user_id;
        });


    }
}
