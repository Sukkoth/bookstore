<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Cart;
use Auth;

class CartController extends Controller
{
    public function store(Request $request){
        $data = $request->validate([
            'book_id' => 'required',
            'quantity' => 'required',
            'user_id' => 'required',
        ]);
        $found = Cart::where('user_id', $data['user_id'])->where('book_id', $data['book_id'])->first();
        if($found){
            $found->quantity += $data['quantity'];
            $found->save();
            return response()->json(['msg' => 'Found and updated', 'cart' => Cart::where('user_id', 1)->sum('quantity')]);
        }

        Cart::create($data);
        return response()->json(['msg' => 'Created new', 'cart' => Cart::where('user_id', 1)->sum('quantity')]);
    }
}
