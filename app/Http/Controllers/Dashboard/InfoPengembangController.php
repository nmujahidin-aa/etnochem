<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfoPengembangController extends Controller
{
    public function __construct(){
        $this->route = "dashboard.";
        $this->view = "dashboard.pages.info-pengembang.";
    }

    public function index(){
        return view($this->view. "index");
    }
}
