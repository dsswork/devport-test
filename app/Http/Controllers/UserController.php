<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->validated());
        $rawToken = $user->createToken('token');
        $token = $rawToken->plainTextToken;
        return to_route('site.show', compact(['token']));
    }
}
