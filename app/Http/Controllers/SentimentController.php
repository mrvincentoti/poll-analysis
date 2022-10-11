<?php

namespace App\Http\Controllers;

use App\Models\Sentiment;
use App\Http\Requests\StoreSentimentRequest;
use App\Http\Requests\UpdateSentimentRequest;

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
    public function store(StoreSentimentRequest $request)
    {
        //
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
}
