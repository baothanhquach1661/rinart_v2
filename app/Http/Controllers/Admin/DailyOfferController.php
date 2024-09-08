<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DailyOffer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class DailyOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $daily_offer_products = DailyOffer::all();
        return view('admin.daily-offer.index', compact('daily_offer_products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::where('status', 1)->get();
        return view('admin.daily-offer.create', compact('products'));
    }

    public function show()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $daily_offer = new DailyOffer();

        $daily_offer->product_id = $request->product;
        $daily_offer->status = $request->status;
        $daily_offer->save();

        return redirect()->route('admin.daily-offer.index')->with('success', 'Product for Daily Offer has been created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
