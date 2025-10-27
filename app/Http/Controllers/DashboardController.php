<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the dashboard - MODIFIED FOR DEVELOPMENT
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Untuk development, langsung tampilkan dashboard tanpa auth
        return view('dashboard');
    }
}
