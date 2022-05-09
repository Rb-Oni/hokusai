<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function show()
    {
        $products = Product::orderBy('id', 'asc')->paginate(10);

        return view('calendar', [
            'products' => $products
        ]);
    }
}
