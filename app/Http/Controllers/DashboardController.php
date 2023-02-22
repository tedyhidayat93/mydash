<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class DashboardController extends Controller
{
    // ============== users login / register / reset password / management ==================================================
    public function index() 
    {
        return view('pages.dashboard.dashboard_1');
    }


}