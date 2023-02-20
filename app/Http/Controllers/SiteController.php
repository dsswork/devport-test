<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Result;
use App\Services\Points;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function show($slug, Request $request)
    {
        $link = Link::slug($slug)->valid()->firstOrFail();
        $user_id = $link->user_id;

        $points = null;
        $isWin = false;
        $value=0;

        if($request->play) {
            $points = rand(1, 1000);
            if($points%2==0) {
                $isWin = true;
                $value = Points::calculate($points);
            }

            Result::create(compact(['points', 'value', 'user_id']));
        }

        $history = Result::where('user_id', $user_id)->latest('created_at')->limit(3)->get();

        return view('site.show', compact(['slug', 'points', 'isWin', 'value', 'history', 'link', 'user_id']));
    }
}
