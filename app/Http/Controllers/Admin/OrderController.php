<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function index()
    {
        $orders = Order::all();
        return view('admin.order.index', compact('orders'));
    }

    function show(string $order_id)
    {
        $order = Order::findOrFail($order_id);
        return view('admin.order.show', compact('order'));
    }
}