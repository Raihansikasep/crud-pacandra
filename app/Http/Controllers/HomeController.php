<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $user = Auth::user();

        if ($user->isAdmin == 1) {
            return redirect('admin');
        } else {
            return redirect('/');
        }
    }
}
