<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function show($token, Request $request)
    {
        $result = null;
        $isWin = false;
        $sum=0;
        if($request->play) {
            $result = rand(1, 1000);
            if($result%2==0) {
                $isWin = true;
                if($result>900) {
                    $sum = $result*0.7;
                }

                if($result>600&&$result<901) {
                    $sum = $result*0.5;
                }

                if($result>300&&$result<601) {
                    $sum = $result*0.3;
                }

                if($result<301) {
                    $sum = $result*0.1;
                }
            }

        }

        $mytoken = PersonalAccessToken::where('token', $token)->first();
        $user = $mytoken->tokenable;

        dd($user);

        Result::create([
            'value' => $sum,
            'user_id' => 1
        ]);

        return view('site.show', compact(['token', 'result', 'isWin', 'sum']));
    }
}
