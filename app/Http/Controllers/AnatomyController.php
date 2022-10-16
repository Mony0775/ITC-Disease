<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anatomy;
class AnatomyController extends Controller
{
    public function index(){
        $anatomy = Anatomy::all();
        return view('navigation.anatomy', compact('anatomy'));
    }
    public function anatomy($id){
        $anatomy = Anatomy::find($id);
        return view('details.anatomy_detail', compact('anatomy'));
    }
}
