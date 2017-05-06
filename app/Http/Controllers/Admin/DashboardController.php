<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
   	public function index(){
   		$userRole = Auth::user()->role_id;
   		return view('admin.dashboard.index', compact('userRole'));
   	}
}
