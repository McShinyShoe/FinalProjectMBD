<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Customers;

class HomeController extends Controller
{
    public function home()
    {
        $orders = Orders::all();
        $customers = Customers::all();
        return view('home', compact('customers', 'orders'));
    }
}
