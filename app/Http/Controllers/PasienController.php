<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::denies('manage-pasien')) {
            abort(403);
        }

        return view('pasien.dashboard');
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
        $pasien = new Pasien;
        $pasien->nama_pemohon=$request->nama_pemohon;
        $pasien->hotline=$request->hotline;
        $pasien->nama_pasien=$request->nama_pasien;
        $pasien->gender=$request->gender;        
        $pasien->age=$request->age;
        $pasien->blood_type=$request->blood_type;
        $pasien->rhesus=$request->rhesus;
        $pasien->hospital=$request->hospital;
        $pasien->hospital_room=$request->hospital_room;
        $pasien->province=$request->province;
        $pasien->city=$request->city;
        $pasien->File_TPK=$request->File_TPK;
        $pasien->Link_TPK=$request->Link_TPK;
        $pasien->jumlah_plasma=$request->jumlah_plasma;
        $pasien->vaccinated=$request->vaccinated;
        $pasien->save();
        return redirect('stok-plasma-donor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasien $pasien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasien $pasien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasien $pasien)
    {
        //
    }
}
