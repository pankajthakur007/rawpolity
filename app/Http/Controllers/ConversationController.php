<?php

namespace App\Http\Controllers;

use App\conversation;
use Illuminate\Http\Request;

class ConversationController extends Controller
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

    public function getChating ($from,$to) {
        echo $from;
        echo $to;
        exit();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\conversation  $conversation
     * @return \Illuminate\Http\Response
     */
    public function show(conversation $conversation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\conversation  $conversation
     * @return \Illuminate\Http\Response
     */
    public function edit(conversation $conversation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\conversation  $conversation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, conversation $conversation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\conversation  $conversation
     * @return \Illuminate\Http\Response
     */
    public function destroy(conversation $conversation)
    {
        //
    }
}
