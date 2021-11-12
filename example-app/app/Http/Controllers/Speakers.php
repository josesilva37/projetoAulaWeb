<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use Illuminate\Http\Request;

class Speakers extends Controller
{
    public function showall(){
        return view('speakers', ['speaks' => Speaker::all()]);
    }
}
