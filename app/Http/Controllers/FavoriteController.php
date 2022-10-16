<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function favoritelist(){
        $favorite = DB::table('favorites')->where('user_id', Auth::id())->leftJoin('diseases', 'diseases.id', '=', 'favorites.disease_id')
        ->get();
        return view('favorites.favorite', compact('favorite'));
        // dd($favorite);
    }

    public function addFavorite(Request $request){
        $item = $request->input('disease_id');
        if(Auth::check()){
            if(Favorite::where('user_id', Auth::id())->where('disease_id', $item)->exists()){
                alert("Already add to favorite list");
            }else{
                $item = new Favorite();
                $item->disease_id = $item;
                $item->user_id = Auth::id();
                $item->save();
                alert("Added to favorites list");
            }
        }else{
            return redirect('/login')->with('Login in to continues');
        }
    }
}
