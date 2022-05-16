<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function edit()
    {
        $user = Auth::user();

        return view('profile', [
            'user' => $user
        ]);
    }

    public function update(UpdateProfileRequest $request)
    {
        $user = Auth::user();

        $user->update([
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'email' => $request->email,
            'gender' => $request->gender,
            'country' => $request->country,
            'address' => $request->address,
            'postcode' => $request->postcode,
            'city' => $request->city,
            'birthdate' => $request->birthdate,
            'phone' => $request->phone
        ]);

        return redirect()->route('profile', $user)->with('message', 'Coordonnées sauvegardées avec succès');
    }
}
