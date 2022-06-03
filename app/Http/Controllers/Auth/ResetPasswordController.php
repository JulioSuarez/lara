<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Http\Models\User;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo(){
        if( Auth()->user()->role == 1 ){
            return route('admin.dashboard');
        }
        elseif( Auth()->user()->role == 2 ){
            return route('user.dashboard');
        }
    }

    public function index(){
        return view('auth.passwords.reset');
    }

    public function mostrarToken(Request $request){
        $user = User::where('email', $request->email)->first();
        if( $user ){
            $token = $user->createToken('MyApp')->accessToken;
            return view('auth.passwords.token', compact('token'));
        }
        else{
            return response()->json(['error' => 'Usuário não encontrado'], 404);
        }
    }
}
