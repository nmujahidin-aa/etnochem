<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AyoBerwawasanController extends Controller
{
    public function __construct(){
        $this->view = "home-page.pages.student.ayo-berwawasan.";
    }
    public function index(){
        return view($this->view. "index");
    }
    public function video(){
        return view($this->view. "video");
    }
    public function bahan(){
        return view($this->view. "bahan");
    }
    public function soal(){
        return view($this->view. "soal");
    }
}
