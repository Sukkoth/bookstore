<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favourite;

class FavouriteController extends Controller
{
    public function store_or_delete(Request $request){
        $data = $request->validate([
            'book_id' => 'required',
            'user_id' => 'required'
        ]);
        $found = Favourite::where('user_id', 1)->where('book_id', $data['book_id'])->first();
        if($found){
            $found->delete();
            return response()->json(['status' => 0, 'favourites' => Favourite::where('user_id', 1)->count()]);
        }
        else{
            Favourite::create($data);
            return response()->json(['status' => 1, 'favourites' => Favourite::where('user_id', 1)->count()]);
        }

        return response()->json(['msg'=>'something went wrong'], 500);
    }
}
