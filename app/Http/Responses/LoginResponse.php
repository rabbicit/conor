<?php
namespace App\Http\Responses;

use App\Models\User;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

use Illuminate\Support\Facades\Session;
class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        // here i am checking if the currently logout in users has a role_id of 2 which make him a regular user and then redirect to the users dashboard else the admin dashboard
        $user = User::where('email', $request->email)->first();
        if($user->role == 'member'){
            session(['role' => 'member']);
            return redirect(route('owner.dashboard'));
        }elseif($user->role == 'admin'){
            session(['role' => 'admin']);
            return redirect(route('admin.dashboard'));
        }elseif(Session::has('orders')){
            return redirect(route('checkout'));
        }else{
            return redirect(route('customer.dashboard'));
        }
    }
}