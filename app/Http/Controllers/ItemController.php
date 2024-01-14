<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function home()
    {
        $items = Item::all();

        return view('home', compact('items'));
    }

    public function search(Request $request)
    {
        // The request of the user.
        $search = $request->search;

        // The search functionality.
        $items = Item::where(function ($query) use ($search) {
            $query->where('name', 'like', "%$search%")
                ->orWhere('customer', 'like', "%$search%");
        })->get();


        return view('home', compact('items', 'search'));
    }
}
