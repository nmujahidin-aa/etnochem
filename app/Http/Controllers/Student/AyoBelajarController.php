<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AyoBelajarController extends Controller
{
    public function __construct(){
        $this->view = "home-page.pages.student.ayo-belajar.";
    }
    public function index(){
        return view($this->view. "index");
    }
}
