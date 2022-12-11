<?php

namespace App\Http\Controllers;

use App\Models\Crime;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class CrimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields = $request->validate(
            [
                'name' => 'required',
                'ip' => 'required',
                'region' => 'required',
                'lat' => 'required',
                'lng' => 'required',
                'description' => 'required | min:3',
            ]
        );

        // dd($formFields);

        Crime::create($formFields);

        return redirect('/')->with('message', 'Crime Reported Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Crime  $crime
     * @return \Illuminate\Http\Response
     */
    public function show(Crime $crime)
    {
        return view('crimes.review', [
            'crime' => $crime
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Crime  $crime
     * @return \Illuminate\Http\Response
     */
    public function edit(Crime $crime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Crime  $crime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crime $crime)
    {
        $formFields = $request->validate(
            [
                'status' => 'required',
            ]
        );

        dd($formFields);

        $crime->update($formFields);

        return back()->with('message', 'Crime Activated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Crime  $crime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crime $crime)
    {
        // dd($crime->id);

        $crime->delete();

        return back()->with('message', 'Crime Deleted Successfully!');
    }
}