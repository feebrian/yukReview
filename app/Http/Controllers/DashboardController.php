<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('auth.dashboard.main', [
            'active' => 'login',
            'title' => 'Dashboard'
        ]);
    }
}
