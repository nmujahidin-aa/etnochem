<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Enums\RoleEnum;
use Auth;

class DashboardController extends Controller
{
    public function __construct(){
        $this->view = "dashboard.pages.dashboard.";
    }

    public function index(){
        if(Auth::user()->hasRole([RoleEnum::STUDENT])){
            return redirect()->route("student.index");
        }
        return view($this->view. "index");
    }
}
