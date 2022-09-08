<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreThreadsRequest;
use App\Http\Requests\UpdateThreadsRequest;
use App\Models\Threads;

class ThreadsController extends Controller
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
     * @param  \App\Http\Requests\StoreThreadsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreThreadsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Threads  $threads
     * @return \Illuminate\Http\Response
     */
    public function show(Threads $threads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Threads  $threads
     * @return \Illuminate\Http\Response
     */
    public function edit(Threads $threads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateThreadsRequest  $request
     * @param  \App\Models\Threads  $threads
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateThreadsRequest $request, Threads $threads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Threads  $threads
     * @return \Illuminate\Http\Response
     */
    public function destroy(Threads $threads)
    {
        //
    }
}
