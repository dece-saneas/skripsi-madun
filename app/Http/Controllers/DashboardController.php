<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // $role = Role::create(['name' => 'Customer']);
       // $role = Role::create(['name' => 'Admin CRO']);
       // $role = Role::create(['name' => 'Admin Gudang']);
       // $role = Role::create(['name' => 'Manager']);
        
       // $user = Auth::user();
       // $user->assignRole('Customer');
        
        return view('dashboard');
    }
}
