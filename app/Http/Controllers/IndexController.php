<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $featured_items = Item::featured_items();

        return view('index', compact('featured_items'));
    }
}
