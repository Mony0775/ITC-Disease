<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SymptomController extends Controller
{
    public function symptompart(){
         return view('navigation.symptom');
    }
}
