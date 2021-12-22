<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospital = Hospital::all();
        return view('pages.hospital.hospital-data', ['hospitals'=> $hospital]);
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
        $hospital = new Hospital;
        $hospital->name=$request->name;
        $hospital->address=$request->address;
        $hospital->hotline=$request->hotline;
        $hospital->stok_plasma_a_positif=$request->stok_plasma_a_positif;
        $hospital->stok_plasma_a_negatif=$request->stok_plasma_a_negatif;
        $hospital->stok_plasma_b_positif=$request->stok_plasma_b_positif;
        $hospital->stok_plasma_b_negatif=$request->stok_plasma_b_negatif;
        $hospital->stok_plasma_ab_positif=$request->stok_plasma_ab_positif;
        $hospital->stok_plasma_ab_negatif=$request->stok_plasma_ab_negatif;
        $hospital->stok_plasma_o_positif=$request->stok_plasma_o_positif;
        $hospital->stok_plasma_o_negatif=$request->stok_plasma_o_negatif;
        $hospital->save();
        return redirect('hospital');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function show(Hospital $hospital)
    {
        $data= Hospital::All();
        return view('pages.hospital.hospital-data', ['hospitals'=>$data]);
    }

    public function showHospital(Hospital $hospital)
    {
        $data= Hospital::All();
        return view('pages.pendonor.stok-plasma-pendonor', ['hospitals'=>$data]);
    }

    public function showHospitalPasien(Hospital $hospital)
    {
        $data= Hospital::All();
        return view('pages.pasien.stok-plasma-donor', ['hospitals'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function edit(Hospital $hospital)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hospital $hospital)
    {
        $hospital = Hospital::find($id);
        $hospital->name = $request->name;
        $hospital->address = $request->address;
        $hospital->hotline = $request->hotline;
        $hospital->update();
      
        return $hospital;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hospital $hospital, $id)
    {
        $hospitals = Hospital::find($id);
        $hospitals->delete();
        return view('pages.hospital.hospital-data');
    }
}