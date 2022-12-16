<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disease;
class DiseaseController extends Controller
{
        public function diseaseindex(){
        $disease = Disease::orderBy('id', 'desc')->paginate(12);
        return view('diseases.disease', compact('disease'));
    }

    public function manindex(){
        $man = Disease::where('type', '=', 'Man')->orderBy('id', 'desc')->paginate(12);
        return view('diseases.man', compact('man'));
    }
    public function womanindex(){
        $woman = Disease::where('type', '=', 'Woman')->orderBy('id', 'desc')->paginate(12);
        return view('diseases.woman', compact('woman'));
    }
    public function childrenindex(){
        $children = Disease::where('type', '=', 'Children')->orderBy('id', 'desc')->paginate(12);
        return view('diseases.children', compact('children'));
    }
    public function elderindex(){
        $elder = Disease::where('type', '=', 'Elder')->orderBy('id', 'desc')->paginate(12);
        return view('diseases.elder', compact('elder'));
    }
    public function everybodyindex(){
        $everybody = Disease::where('type', '=', 'Everybody')->orderBy('id', 'desc')->paginate(12);
        return view('diseases.everybody', compact('everybody'));
    }

    public function disease($id){
        $disease = Disease::find($id);
        return view('details.disease_detail', compact('disease'));
    }
}
