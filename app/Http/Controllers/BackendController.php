<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class BackendController extends Controller
{
    public function administrator()
    {
        return view('admin.table.administrator');
    }
    public function mentors()
    {
        return view('admin.table.mentors');
    }
    public function pendingmentors()
    {
        return view('admin.table.pendingmentors');
    }
    public function mentee()
    {
        return view('admin.table.mentee');
    }
    public function pendingmentee()
    {
        return view('admin.table.pendingmentee');
    }
    public function users()
    {
        return view('admin.table.users');
    }
   
    public function pendingmeeting()
    {
        return view('admin.table.pendingmeeting');
    } 
    public function approvedmeeting()
    {
        return view('admin.table.approvedmeeting');
    }

    public function rejectedmeeting()
    {
        return view('admin.table.rejectedmeeting');
    }
    public function completedmeeting()
    {
        return view('admin.table.completedmeeting');
    }
    public function allmeeting()
    {
        return view('admin.table.allmeeting');
    }
    public function allticket()
    {
        return view('admin.table.allticket');
    }
    public function pendingticket()
    {
        return view('admin.table.pendingticket');
    }
    public function completedticket()
    {
        return view('admin.table.completedticket');
    }
    public function contactmassage()
    {
        return view('admin.table.contactmassage');
    }
    public function subscribermanager()
    {
        return view('admin.table.tablesubscribermanager');
    }
    public function allwithdraw()
    {
        return view('admin.table.allwithdraw');
    }
    public function pendingwithdraw()
    {
        return view('admin.table.pendingwithdraw');
    }
    public function completedwithdraw()
    {
        return view('admin.table.completedwithdraw');
    }
    public function rejectedwithdraw()
    {
        return view('admin.table.rejectedwithdraw');
    }
}
