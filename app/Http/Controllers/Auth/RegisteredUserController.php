<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        if(config('chemhunt.registration_status')===true){
            return view('auth.register');
        }
        else{
            return view('auth.register-stop');
        }

    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'college' => 'required|string|max:255',
            'year' => 'required|numeric|max:255',
            'state' => 'required|string|max:255',
            'phone_number' => 'required|digits:10',
            'phone_number_wapp' => 'required|digits:10',
            'user_email' => 'required|string|email|max:255|unique:users',
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'college' => $request->college,
            'year' => $request->year,
            'state' => $request->state,
            'phone_number' => $request->phone_number,
            'phone_number_wapp' => $request->phone_number_wapp,
            'user_email' => $request->user_email,
        ]);

        event(new Registered($user));

        session()->flash('registration_name',$request->first_name.' '.$request->last_name);
        return redirect('/register/thank-you');
    }
    /**
     * Display the registration view.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function thankyou()
    {
        if(session()->has('registration_name')){
            return view('auth.register-thank-you');
        }
        else{
            return redirect('/');
        }

    }

}
