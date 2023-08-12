<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;
use App\Models\resume;

class WelcomeController extends Controller
{
    public function Welcome(){
        $data = about::get()->first();
        return view('frontend/welcome', compact('data'));
    }

    public function ShowResume(){
        $data = resume::get()->all();
        return view('Admin/resume', compact('data'));
    }
}
