<?php

namespace App\Http\Controllers;

use App\Stream;
use Illuminate\Http\Request;

class StreamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('streams.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms/create-stream');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'date' => 'required',
            'time' => 'required'
        ]);

        Stream::Create($request->all());

        return redirect('streams');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stream $stream
     * @return \Illuminate\Http\Response
     */
    public function show(Stream $stream)
    {
        return view('streams.single', compact('stream'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stream $stream
     * @return \Illuminate\Http\Response
     */
    public function edit(Stream $stream)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stream $stream
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stream $stream)
    {
        $this->validate($request, [
            'title' => 'required',
            'date' => 'required',
            'time' => 'required'
        ]);

        Stream::Create($request->all());

        return redirect('streams');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stream $stream
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stream $stream)
    {
        $stream->delete();
    }
}
