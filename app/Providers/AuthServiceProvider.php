<?php

namespace App\Providers;

//use App\Message;
//use App\Policies\MessagePolicy;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
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
        'App\Message' => 'App\Policies\MessagePolicy',
        'App\Bclient' => 'App\Policies\BclientPolicy',
      //  Message::class=>MessagePolicy::class,
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);
        $gate->define('update-profile', function ($user, $profile) {
            return $user->id == $profile->user_id;
        });
        $gate->define('send_message',function($user,$request){
            return $user->id != $request->to;
        });
        $gate->define('block_user',function($user,$request){
            return $user->id != $request->userid;
        });
        /*$gate->define('block_user',function($user,$request){
            return $user->id != $request->userid;
        });*/
        //
    }
}
