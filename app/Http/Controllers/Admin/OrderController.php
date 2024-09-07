<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderPlacedNotification;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function index()
    {
        $orders = Order::all();
        return view('admin.order.index', compact('orders'));
    }

    function invoice(string $order_id)
    {
        $order = Order::findOrFail($order_id);
        return view('admin.order.invoice', compact('order'));
    }

    function show(string $order_id)
    {
        $order = Order::findOrFail($order_id);
        $notification = OrderPlacedNotification::where('order_id', $order->id)->update(['seen' => 1]);
        return view('admin.order.show', compact('order'));
    }

    function orderStatusUpdate(Request $request, string $id)
    {
        $order = Order::findOrFail($id);
        $order->payment_status = $request->payment_status;
        $order->order_status = $request->order_status;
        $order->save();

        return redirect()->back()->with('success', 'Status has been updated');
    }

    function destroy(string $order_id)
    {
        try {
            $order = Order::findOrFail($order_id);
            $order->delete();

            return response(['status' => 'success', 'message' => 'Your Category has been deleted successfully!']);
        } catch(\Exception $e){
            logger($e);
            return response(['status' => 'error', 'message' => 'Something wrong. Please try again!']);
        }
    }

    function pendingOrdersIndex()
    {
        $orders = Order::where('order_status', 'pending')->get();
        return view('admin.order.order-pending', compact('orders'));
    }

    function processingOrdersIndex()
    {
        $orders = Order::where('order_status', 'processing')->get();
        return view('admin.order.order-processing', compact('orders'));
    }

    function shippingOrdersIndex()
    {
        $orders = Order::where('order_status', 'shipping')->get();
        return view('admin.order.order-shipping', compact('orders'));
    }

    function deliveredOrdersIndex()
    {
        $orders = Order::where('order_status', 'delivered')->get();
        return view('admin.order.order-delivered', compact('orders'));
    }

    function canceledOrdersIndex()
    {
        $orders = Order::where('order_status', 'canceled')->get();
        return view('admin.order.order-canceled', compact('orders'));
    }
}
