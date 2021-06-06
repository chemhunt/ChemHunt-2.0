<?php

namespace App\Http\Controllers\Chemhunt;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function show(){
        if (config('chemhunt.login_status')===false){
            Auth::logout();
        }
        return view('user.dashboard.index');
    }
}
