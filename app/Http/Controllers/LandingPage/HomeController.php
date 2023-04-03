<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(){
        $this->route = "landing-page.home.";
        $this->view = "landing-page.pages.beranda.";
    }

    public function index(){
        return view($this->view."index");
    }
}
