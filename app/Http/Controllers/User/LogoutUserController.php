<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class LogoutUserController extends Controller
{
    public function __invoke(Response $request) {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Wylogowałeś się.'
        ];
    }
}
