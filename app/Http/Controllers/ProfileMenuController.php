<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileMenuController extends Controller
{
    public function about()
    {
        return view('user.profile.about.index');
    }

    public function visionMission()
    {
        return view('user.profile.visionmission.index');
    }

    public function organizationStructure()
    {
        return view('user.profile.organizationstructure.index');
    }
}
