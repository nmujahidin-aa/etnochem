<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function __construct(){
        $this->view = "home-page.pages.teacher.home";
    }
    public function index(){
        return view($this->view. "index");
    }
}
