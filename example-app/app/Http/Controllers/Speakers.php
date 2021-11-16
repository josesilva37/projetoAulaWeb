<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use Illuminate\Http\Request;

class Speakers extends Controller
{
    public function showall(){
        return view('speakers', ['speaks' => Speaker::all()]);
    }
    public function show($id)
    {
        return view('speakerinfo',['speaks' => Speaker::findOrFail($id)]);
    }

    public function edit($id){

    }
}
