<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disease;
use App\Models\Body;
class BodyController extends Controller
{
    public function body(){
        $bodies = Body::all();
        return view('body.body', compact('bodies'));
    }
    public function bodylist($name){
        $bodies = Disease::where('body', '=', $name)->get();
        return view('body.bodylist', compact('bodies'));
        // return dd($bodies);
    }
}
