<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServiceDetailController extends Controller
{
    function showServiceDetail(String $slug)
    {
        $services = Services::where('status', 1)
            ->where('slug', '!=', $slug)
            ->get();
        // Fetch the service details based on the ID
        $service_detail = Services::where('slug', $slug)->first();

        return view('frontend.services.service-detail', compact('service_detail', 'services'));
    }
}
