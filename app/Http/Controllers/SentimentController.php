<?php

namespace App\Http\Controllers;

use App\Models\Sentiment;
use App\Http\Requests\StoreSentimentRequest;
use App\Http\Requests\UpdateSentimentRequest;
use App\Models\Location;
use App\Models\Region;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SentimentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSentimentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->action == 'location') {
            $post = new Location();
            $post->location_name = $request->location_name;
            $post->summary = $request->summary;
            $post->total = $request->total;
            $post->positive = $request->positive;
            $post->negative = $request->negative;
            $post->neutral = $request->neutral;
            $post->save();
            return back()->with('status', 'Blog Post Form Data Has Been inserted');
        }

        if ($request->action == 'region') {
            $post = new Region();
            $post->location_id = $request->location_id;
            $post->nc = $request->nc;
            $post->nw = $request->nw;
            $post->ss = $request->ss;
            $post->ne = $request->ne;
            $post->se = $request->se;
            $post->sw = $request->sw;
            $post->save();
            return back()->with('status', 'Blog Post Form Data Has Been inserted');
        }

        if ($request->action == 'comment') {
            $post = new Comment();
            $post->location_id = $request->location_id;
            $post->username = $request->username;
            $post->comment = $request->comment;
            $post->save();
            return back()->with('status', 'Blog Post Form Data Has Been inserted');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sentiment  $sentiment
     * @return \Illuminate\Http\Response
     */
    public function show(Sentiment $sentiment)
    {
        return view('dashboard');
    }

    public function pvc()
    {
        return view('pvc');
    }

    public function geodata()
    {
        return view('geodata');
    }

    public function facebook()
    {
        return view('facebook');
    }

    public function instagram()
    {
        return view('instagram');
    }

    public function rally($id)
    {
        $location = DB::table('locations')->where('id', $id)->first();
        $comments = DB::table('comments')->where('location_id', $id)->get();
        return view('rally', compact('location', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sentiment  $sentiment
     * @return \Illuminate\Http\Response
     */
    public function edit(Sentiment $sentiment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSentimentRequest  $request
     * @param  \App\Models\Sentiment  $sentiment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSentimentRequest $request, Sentiment $sentiment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sentiment  $sentiment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sentiment $sentiment)
    {
        //
    }

    public function admin()
    {
        $locations = Location::all();
        return view('admin', compact('locations'));
    }

    public function getStateData($id)
    {
        $location = DB::table('regions')->where('id', $id)->first();
        return response()->json($location);
    }
}
