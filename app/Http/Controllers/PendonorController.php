<?php

namespace App\Http\Controllers;

use App\Models\Pendonor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class PendonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('pages.pendonor.stok-plasma-pendonor', [
            'pendonor' => PendonorController::class
        ]);
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
        $pendonor = new Pendonor;
        $pendonor->nama_pendonor=$request->nama_pendonor;
        $pendonor->hotline=$request->hotline;
        $pendonor->NIK=$request->NIK;
        $pendonor->gender=$request->gender;
        $pendonor->age=$request->age;
        $pendonor->blood_type=$request->blood_type;
        $pendonor->rhesus=$request->rhesus;
        $pendonor->weight=$request->weight;
        $pendonor->height=$request->height;
        $pendonor->province=$request->province;
        $pendonor->city=$request->city;
        $pendonor->kecamatan=$request->kecamatan;
        $pendonor->kelurahan=$request->nama_pendonor;
        $pendonor->alamat=$request->alamat;
        $pendonor->covid_infected=$request->covid_infected;
        $pendonor->donors=$request->donors;
        $pendonor->donors_apheresis=$request->donors_apheresis;
        $pendonor->donors_hospital=$request->donors_hospital;
        $pendonor->PCR_Positive=$request->PCR_Positive;
        $pendonor->PCR_Negative=$request->PCR_Negative;
        $pendonor->PCR_Positive_File=$request->PCR_Positive_File;
        $pendonor->PCR_Negative_File=$request->PCR_Negative_File;
        $pendonor->save();
        return redirect('stok-plasma-pendonor');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendonor  $pendonor
     * @return \Illuminate\Http\Response
     */
    public function show(Pendonor $pendonor)
    {
        $data= Pendonor::All();
        return view('pages.pendonor.list-pendonor', ['pendonors'=>$data]);
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
