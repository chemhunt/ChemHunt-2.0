<?php

namespace App\Http\Controllers\Chemhunt;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function show(){
        return view('user.dashboard.index');
    }
}
