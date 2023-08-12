<?php

namespace App\Http\Controllers;

use App\Models\resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('Admin/resume');
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
        $points = $request->input('points');
        $pointsArry = explode("\n", $points);
        $serializedPoints = json_encode($pointsArry);
        $data = [
            'R_description' => $request->R_description,
        'address' => $request->address,
        'phone' => $request->phone,
        'email' => $request->email,
        'E_title' => $request->E_title,
        'year' => $request->year,
        'school_name' => $request->school_name,
        'E_description' => $request->E_description,
        'Pe_title' => $request->Pe_title,
        'Pe_year' => $request->Pe_year,
        'Pe_address' => $request->Pe_address,
        'points' => $serializedPoints,
        ];
        $finalVar = new resume();
        $finalVar->fill($data);
        $finalVar->save();

        return redirect()->route('resume.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $data = resume::get()->first();
        return view('Admin/resume-edit',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(resume $resume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = resume::get()->first();
        $points = $request->input('points');
        $pointsArry = explode("\n", $points);
        $serializedPoints = json_encode($pointsArry);
        $data->update([
            'R_description' => $request->R_description,
        'address' => $request->address,
        'phone' => $request->phone,
        'email' => $request->email,
        'E_title' => $request->E_title,
        'year' => $request->year,
        'school_name' => $request->school_name,
        'E_description' => $request->E_description,
        'Pe_title' => $request->Pe_title,
        'Pe_year' => $request->Pe_year,
        'Pe_address' => $request->Pe_address,
        'points' => $serializedPoints,
        ]);
        return redirect()->route('resume.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = resume::get()->first();
        $delete->delete();
        return redirect()->back()->with('message', 'Data Deleted Sucessfully');
    }
}
