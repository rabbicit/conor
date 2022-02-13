<?php

namespace App\Http\Responses;

use App\Models\User;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Support\Facades\Session;
use Laravel\Fortify\Http\Responses\RegisterResponse as FortifyRegisterResponse;

class RegisterResponse extends FortifyRegisterResponse
{
    protected $guard;

    public function __construct(StatefulGuard $guard)
    {
        $this->guard = $guard;
    }

    public function toResponse($request)
    {
        $user = User::where('email', $request->email)->first();

        if($user->role == 'member'){
            return redirect(route('start'));
        }else{
            return redirect(route('index'));
        }

        // $this->guard->logout();

        // return parent::toResponse($request);
        // if(Session::has('orders')){
        //     return redirect(route('checkout'));
        // }else{
        //     return redirect(route('listings'));
        // }
    }
}