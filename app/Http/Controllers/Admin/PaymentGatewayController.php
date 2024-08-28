<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentGatewaySetting;
use App\Services\PaymentGatewaySettingService;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class PaymentGatewayController extends Controller
{
    use ImageUploadTrait;

    function index()
    {
        $paymentGateWaySetting = PaymentGatewaySetting::pluck('value', 'key');
        return view('admin.payment-gateway-setting.index', compact('paymentGateWaySetting'));
    }


    function paypalSettingUpdate(Request $request)
    {
        $validateData = $request->validate([
            'paypal_status' => ['required'],
            'paypal_account_mode' => ['required', 'in:sandbox,live'],
            'paypal_country' => ['nullable'],
            'paypal_currency' => ['nullable'],
            'paypal_currency_rate' => ['nullable'],
            'paypal_api_key' => ['required'],
            'paypal_secret_key' => ['required'],
            'paypal_app_id' => ['required']
        ]);

        if($request->hasFile('paypal_logo')){
            $request->validate([
                'paypal_logo' => ['nullable', 'image']
            ]);

            $imagePath = $this->uploadImage($request, 'paypal_logo', 'uploads/payment_gateway');

            PaymentGatewaySetting::updateOrCreate(
                ['key' => 'paypal_logo'],
                ['value' => $imagePath]
            );
        }

        foreach($validateData as $key => $value){
            PaymentGatewaySetting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        $settingService = app(PaymentGatewaySettingService::class);
        $settingService->clearCachedSettings();

        return redirect()->back()->with('success', 'Data has been updated successfully!');
    }
}
