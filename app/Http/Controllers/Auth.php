<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class Auth extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'document' => 'required|number',
        ]);

        $user = User::where('document', $request->document)->first();

        if (! $user ) {
            throw ValidationException::withMessages([
                'document' => ['Error de ingreso'],
            ]);
        }

        return $user->createToken($request->document)->plainTextToken;
    }

    public function user(Request $request)
    {
        return response()->json([
            'name' => auth()->user()->name,
            'email' => auth()->user()->email,
            'document' => auth()->user()->document,
        ]);
    }


}