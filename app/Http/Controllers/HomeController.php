<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->role == 'admin') {
                return view('admin.dashboard');
            } elseif (Auth::user()->role == 'employee') {
                return view('employee.dashboard');
            }
        }
        return redirect()->route('login');
    }
}
