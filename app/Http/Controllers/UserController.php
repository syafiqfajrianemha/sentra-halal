<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $limit = 10;
        $users = User::orderBy('id', 'desc')->paginate($limit);

        return view('admin.user.index', compact('users'));
    }
}
