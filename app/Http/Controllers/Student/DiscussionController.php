<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DiscussionController extends Controller
{
    public function __construct(){
        $this->view = "home-page.pages.student.ayo-berdiskusi.";
        $this->user = new User();
    }
    public function index(){
        $table = $this->user;
        $table = $table->orderBy("created_at","DESC");
        $table = $table->get();

        $data = [
            'table' => $table,
        ];
        return view($this->view. "index",$data);
    }
}
