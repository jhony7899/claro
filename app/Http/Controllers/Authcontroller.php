<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\CAV;
use App\Models\Ciudad;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function index()
    {
        return view('claro.index');
    }

   
    public function create()
    {
        return view('claro.registro', [
            'ciudades' => Ciudad::all(),
        ] );
    }

    public function cavs($id)
    {
    $ciudad=Ciudad::find($id); 
    return CAV::where('ciudad', $ciudad->id)->get();
    }


    public function store(Request $request): RedirectResponse
    {
   $request->validate([
        'email' => ['required', 'confirmed', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        'cedula' => ['required', 'string', 'max:255','regex:/[0-9]+/'],
        'ciudad' => ['required', 'string', 'max:255'],
        'CAV' => ['required', 'string', 'max:255'],
        'password' => ['required','confirmed', Rules\Password::defaults()],
    ]);

    $user = User::create([
        'email' => $request->email,
        'cedula' => $request->cedula,
        'ciudad' => $request->ciudad,
        'CAV' => $request->CAV,
        'password' => Hash::make($request->password),
    ]);

    
    event(new Registered($user));

    Auth::login($user);

    return redirect(RouteServiceProvider::HOME);
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}


