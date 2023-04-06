<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Log;
use App\Enums\RoleEnum;
use App\Models\User;
use Auth;
use Error;

class RegisterController extends Controller
{
     public function __construct(){
        $this->route = "auth.";
        $this->view = "auth.register.";
    }

    public function index(){
        return view($this->view. "index");
    }

    public function post(RegisterRequest $Request){
        try {
            $name = $request->name;
            $email = $request->email;
            $role = $request->role;
            $password = $request->password;

            $user = User::create([
                'name' => $name,
                'email' => $email,
                'role' => $role,
                'password' => bcrypt($password),
            ]);

            $user->assignRole(RoleEnum::STUDENT, RoleEnum::TEACHER);
            event(new Registered($user));

            alert()->html('Berhasil','Register berhasil','success'); 
            return redirect()->route('auth.login.index');

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->html('Gagal',$e->getMessage(),'error');
            return redirect()->route('auth.register.index')->withInput();
        }

    }
}
