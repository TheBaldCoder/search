<?php

namespace App\Http\Controllers;

use App\Models\Item;

class ItemController extends Controller
{
    public function home()
    {
        $items = Item::all();

        return view('home', compact('items'));
    }
}
