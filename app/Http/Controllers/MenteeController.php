<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class MenteeController extends Controller
{
    public function mentee_dashboard()
    {
        return view('admin.index');
    }
}
