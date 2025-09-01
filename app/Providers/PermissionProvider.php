<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PermissionProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //   try{
        //     Permission::get()->map(function($permission){
        //         Gate::define($permission->name , function($user)use($permission){
        //        return $user->hasPermissionTo($permission);
        //         });
        //     });
        // }catch(Exception $e){
        //     report($e);

        // }
    }
}
