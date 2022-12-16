<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function indexSearch(Request $request){
        $search = $request->input('search');
        $data = Disease::query()
                ->where('name', 'LIKE', "%{$search}%")
                ->orWhere('body', 'LIKE', "%{$search}%")
                ->get();
        return view('search.search', compact('data', 'search'));
    }
    
    public function symptomsearch(Request $request){
        $search = $request->input('search');
        $data = Disease::query()->where('symptom', 'LIKE', "%{$search}%")->get();
        return view('navigation.symptom', compact('data', 'search'));
    }
}
