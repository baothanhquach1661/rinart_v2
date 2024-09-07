<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Services\SettingService;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    function index()
    {
        return view('admin.setting.index');
    }

    function updateGeneralSetting(Request $request)
    {
        $validateData = $request->validate([
            'site_name' => ['required', 'max:255'],
            'site_default_currency' => ['required', 'max:4'],
            'site_currency_icon' => ['required', 'max:4'],
            'site_currency_position' => ['required'],
        ]);

        foreach($validateData as $key => $value){
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        $settingService = app(SettingService::class);
        $settingService->clearCachedSettings();

        return redirect()->back()->with('success', 'Data has been Updated successfully!');
    }


    function updatePusherSetting(Request $request)
    {
        $validateData = $request->validate([
            'pusher_app_id' => ['required', 'max:255'],
            'pusher_key' => ['required', 'max:50'],
            'pusher_secret' => ['required', 'max:50'],
            'pusher_cluster' => ['required'],
        ]);

        foreach($validateData as $key => $value){
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        $settingService = app(SettingService::class);
        $settingService->clearCachedSettings();

        return redirect()->back()->with('success', 'Data has been Updated successfully!');
    }
}
