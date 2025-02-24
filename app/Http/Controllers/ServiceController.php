<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function halalCertification()
    {
        return view('user.service.halalcertification.index');
    }

    public function halalCompanion()
    {
        return view('user.service.halalcompanion.index');
    }

    public function slaughterer()
    {
        return view('user.service.slaughterer.index');
    }
}
