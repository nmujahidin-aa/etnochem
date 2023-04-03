<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Support\Facades\Log;
use App\Enums\RoleEnum;
use Auth;
use Error;

class LoginController extends Controller
{
    public function __construct(){
        $this->route = "auth.";
        $this->view = "auth.login.";
    }

    public function index(){
        return view($this->view. "index");
    }

    public function login(LoginRequest $request)
    {
        try {

            $email = $request->email;
            $password = $request->password;

            $rememberme = (empty($request->rememberme)) ? false : true;

            $field = [
                'email' => $email,
                'password' => $password
            ];

            if(Auth::attempt($field,$rememberme)){
                if(!Auth::user()->hasRole([
                    RoleEnum::ADMINISTRATOR,
                    RoleEnum::TEACHER,
                    RoleEnum::STUDENT,
                ])){
                    Auth::logout();
                    throw new Error("Anda tidak diperbolehkan mengakses menu ini");
                }

                if(Auth::user()->hasRole([
                    RoleEnum::ADMINISTRATOR
                ])){
                    alert()->html('Berhasil','Login berhasil','success'); 
                    return redirect()->intended(route('dashboard.index'));
                }
            }
            else{
                throw new Error("Username / password tidak sesuai");
            }

            alert()->html('Berhasil','Login berhasil','success'); 
            return redirect()->intended(route('dashboard.index'));

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->html('Gagal',$e->getMessage(),'error');
            return redirect()->route('auth.login.index')->withInput();
        }
    }
}
