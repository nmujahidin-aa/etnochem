<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
     public function __construct(){
        $this->route = "auth.";
        $this->view = "auth.register.";
    }

    public function index(){
        return view($this->view. "index");
    }
}
