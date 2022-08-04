<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class LoginUserController extends Controller
{
    public function __invoke(Request $request) {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        $user = User::where('email', $fields['email'])->first();

        if(!$user || !Hash::check($fields['password'], $user->password)) {

            return response([
                'message' => 'Błędny login lub hasło.'
            ], 401);
        }

        $token = $user->createToken('apptokenprotected')->plainTextToken;

        $response = [
            'user'=> $user,
            'token' => $token
        ];

        return response($response, 201);
    }
}
