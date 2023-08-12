<?php

namespace App\Http\Controllers;

use App\Models\about;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $result = about::latest()->get()->all();
        // dd($request);
        return view('Admin/about-create', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'title' => $request->title,
            'birthday' => $request->birthday,
            'age' => $request->age,
            'website' => $request->website,
            'degree' => $request->degree,
            'phone' =>  $request->phone,
            'email' => $request->email,
            'city' => $request->city,
            'freelance' => $request->freelance,
            'description' => $request->description,
        ];
        // dd($data);
        about::create($data);
        return redirect()->back()->with('message', 'Data Submitted Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $data = about::get()->first();
        return view('Admin/about-edit', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(about $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = about::latest()->get()->first();
        $data->update([
            'title' => $request->title,
            'birthday' => $request->birthday,
            'age' => $request->age,
            'website' => $request->website,
            'degree' => $request->degree,
            'phone' =>  $request->phone,
            'email' => $request->email,
            'city' => $request->city,
            'freelance' => $request->freelance,
            'description' => $request->description,
        ]);
        return view('Admin/about');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = about::get()->first();
        $data->delete();
        return redirect()->back()->with('message', 'Data Deleted Successfully');
    }
}
