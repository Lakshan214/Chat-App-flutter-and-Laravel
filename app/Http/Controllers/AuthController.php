<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {    $data=$request->validate();
         $data['password']= Hash::make($data['password']);
         $data['name']= strstr($data['email'],'@',true);

         $user=User::create($data);
         $token=$user->createToken(User::USER_TOKEN);

         return $this->success(
            [
                'user'=>$user,
                'token'=>$token->plainTextToken,

            ],'User has been register successfully.'
            );
           
    }

    public function login()
    {
        
    }

    public function loginWithToken()
    {
        
    }


    public function logout()
    {
        
    }
}
