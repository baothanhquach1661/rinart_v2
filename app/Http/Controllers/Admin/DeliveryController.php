<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $delivery_data = Delivery::all();
        return view('admin.delivery.index', compact('delivery_data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.delivery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'delivery_fee' => ['numeric']
        ]);

        $delivery_area = new Delivery();
        $delivery_area->area_name = $request->area_name;
        $delivery_area->min_delivery_time = $request->min_delivery_time;
        $delivery_area->max_delivery_time = $request->max_delivery_time;
        $delivery_area->delivery_fee = $request->delivery_fee;
        $delivery_area->status = $request->status;
        $delivery_area->save();

        return redirect()->route('admin.delivery.index')->with('success', 'Data has been created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $delivery = Delivery::findOrFail($id);
        return view('admin.delivery.edit', compact('delivery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'delivery_fee' => ['numeric']
        ]);

        $delivery_area = Delivery::findOrFail($id);
        $delivery_area->area_name = $request->area_name;
        $delivery_area->min_delivery_time = $request->min_delivery_time;
        $delivery_area->max_delivery_time = $request->max_delivery_time;
        $delivery_area->delivery_fee = $request->delivery_fee;
        $delivery_area->status = $request->status;
        $delivery_area->save();

        return redirect()->route('admin.delivery.index')->with('success', 'Data has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delivery_area = Delivery::findOrFail($id);

        $delivery_area->delete();

        return response(['status' => 'success', 'message' => 'Delivery Area has been deleted successfully!']);
    }
}
