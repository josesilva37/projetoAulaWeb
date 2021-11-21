<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ControllerSponsor extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('sponsor', ['spons' => Sponsor::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newSpon = new Sponsor;
        $newSpon->name = $request->input('name');
        $newSpon->category = $request->input('category');
        $newSpon->save();

        return redirect('/sponsor');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('sponsorInfo', ['sponsI' => Sponsor::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{    
     $SponEdit = Sponsor::find($id);
     $SponEdit->name = $request->input('name');
     $SponEdit->category = $request->input('category');
     $SponEdit->logo = "img/Tesla-Logo.png";
     $SponEdit->isActive = $request->input('active');
     $SponEdit->save();

     return redirect('/sponsor')->with('success', 'Sponsor updated');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sponsor::destroy($id);

        return redirect('/sponsor')->with('success', 'Sponsor deleted');
    }
}
