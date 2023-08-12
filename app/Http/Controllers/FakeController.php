<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;
use App\Models\resume;
use App\Models\FormPost;

class FakeController extends Controller
{
    public function Index(){
        $data = FormPost::get()->all();
        return view('Admin/index', compact('data'));
    }

public function About(){
    $result = about::get()->all();
    return view('Admin/about', compact('result'));
}

public function ShowResume(){
    $data = resume::latest()->get()->all();
        foreach ($data as $point){
            $point->points = json_decode($point->points);
            $point->points = implode(", ", $point->points);
        }
    return view('Admin/resume-create', compact('data'));
}


public function FormPost(Request $request){
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];
        FormPost::create($data);
        return redirect()->back();
    }

}
?>
