<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{

//
    public function index()
    {
        $services = Service::first();
        return view('frontend.service.index', compact('services'));
    }
}
