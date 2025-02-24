<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    public function halalCompanion()
    {
        return view('user.institution.halalcompanion.index');
    }

    public function slaughterer()
    {
        return view('user.institution.slaughterer.index');
    }
}
