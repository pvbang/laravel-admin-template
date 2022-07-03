<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.app.template.index')->with('route', 'dashboard');
    }

    // template
    public function template($slug) {
        return view('admin.app.template.index')->with('route', 'template.'.$slug);
    }
}
