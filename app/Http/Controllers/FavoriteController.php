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

    // public function aaddFavorite(Request $request){
    //     $item = $request->input('disease_id');
    //     if(Auth::check()){
    //         if(Favorite::where('user_id', Auth::id())->where('disease_id', $item)->exists()){
    //             alert("Already add to favorite list");
    //         }else{
    //             $item = new Favorite();
    //             $item->disease_id = $item;
    //             $item->user_id = Auth::id();
    //             $item->save();
    //             alert("Added to favorites list");
    //         }
    //     }else{
    //         return redirect('/login')->with('Login in to continues');
    //     }
    // }
    public function addfavorite(Request $request)
    {
        $disease_id = $request->input('disease_id');
        if(Auth::check()){
            $disease_check = Disease::where('id', $disease_id)->exists();
            if($disease_check){
                if(Favorite::where('user_id', Auth::id())->where('disease_id', $disease_id)->exists()){
                    return response()->json(['status' => $disease_check->name."Already Added to favorite"]);
                }else{
                    $diseaseitem = new Favorite();
                    $diseaseitem -> disease_id = $disease_id;
                    $diseaseitem -> user_id = Auth::id();
                    $diseaseitem->save();
                    return response()->json(['status' => $disease_check->name."Added to favorite"]);
                }
            }
                
        }
        else{
            return response()->json(['status' => "Login to continue"]);
        }
    }
}
