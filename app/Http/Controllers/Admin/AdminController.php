<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderPlacedNotification;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard() : View
    {
        return view('admin.index');
    }

    function login() : View
    {
        return view('admin.auth.login');
    }
}
