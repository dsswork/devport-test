<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\Link;
use App\Models\User;


class UserController extends Controller
{
    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->validated());
        $slug = Link::createNewLink($user->id);
        $link = request()->getSchemeAndHttpHost().'/users/'.$slug;
        return view('site.link', compact(['slug', 'link']));
    }
}
