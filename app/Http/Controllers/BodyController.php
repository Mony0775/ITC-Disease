<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disease;
use App\Models\Body;
class BodyController extends Controller
{
    public function body(){
        $bodies = Body::orderBy('id', 'desc')->paginate(10);
        return view('body.body', compact('bodies'));
    }
    public function allbody(){
        $bodies = Body::orderBy('id', 'desc')->get();
        return view('body.allbody', compact('bodies'));
    }
    public function bodylist($name){
        $bodies = Disease::where('body', '=', $name)->paginate(12);
        return view('body.bodylist', compact('bodies'));
        // return dd($bodies);
    }
}
