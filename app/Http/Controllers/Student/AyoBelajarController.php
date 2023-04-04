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
    public function soal(){
        return view($this->view. "soal");
    }
    public function project(){
        return view($this->view. "project");
    }
    public function jadwal(){
        return view($this->view. "jadwal");
    }
    public function send(){
        return view($this->view. "send");
    }
}
