<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class VerifyController extends Controller
{
    public function getVerify(){
        return view('verify');
    }
    public function postVerify(Request $request){
        if($user=User::where('code',$request->code)->first()){
            $user->active=1;
            $user->code=null;
            $user->save();
            return redirect()->route('login')->withMessage('Your account is active');
        }
        else{
            return back()->withMessage('verify code is not correct. Please try again');
        }
    }
}
