<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use Illuminate\Support\Facades\Request;

class LinkController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLinkRequest  $request
     */
    public function store(StoreLinkRequest $request)
    {
        $slug = Link::createNewLink($request->user_id);
        $link = request()->getSchemeAndHttpHost().'/users/'.$slug;
        return view('site.link', compact(['slug', 'link']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Link  $link
     */
    public function destroy(Link $link)
    {
        $link->delete();
        return to_route('site.index');
    }
}
