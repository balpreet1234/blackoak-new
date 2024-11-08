<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
{
    //
    public function dashboard(Request $request){
        return view('admin.dashboard');
    }

}
