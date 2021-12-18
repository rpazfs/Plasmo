<?php

namespace App\Http\Controllers;

use App\Models\Pendonor;
use Illuminate\Http\Request;

class PendonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('pendonor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pendonor = Pendonor::all();

        return view('pendonor.index', compact('pendonor'));
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
     * @param  \App\Models\Pendonor  $pendonor
     * @return \Illuminate\Http\Response
     */
    public function show(Pendonor $pendonor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendonor  $pendonor
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendonor $pendonor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pendonor  $pendonor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendonor $pendonor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendonor  $pendonor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendonor $pendonor)
    {
        //
    }
}
