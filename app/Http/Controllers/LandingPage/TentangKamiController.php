<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function __construct(){
        $this->route = "landing-page.home.";
        $this->view = "landing-page.pages.tentang-kami.";
    }

    public function index(){
        return view($this->view."index");
    }
}
