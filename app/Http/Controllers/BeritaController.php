<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all();
        return view('pages.berita.berita-data', ['beritas'=> $berita]);
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
        $berita = new Berita;
        $berita->judul_berita=$request->judul_berita;
        $berita->isi_berita=$request->isi_berita;
        $berita->berita_photo_path = $request->berita_photo_path;
        $berita->save();
        return redirect('berita');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        $data= Berita::All();
        return view('pages.berita.berita-data', ['beritas'=>$data]);
    }

    public function showBerita(Berita $berita)
    {
        $data= Berita::All();
        return view('pages.pasien.berita', ['beritas'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Berita::findOrFail($id);
        return view('pages.berita.berita-edit', [
            'berita' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $berita = Berita::find($id)->update($request->all());
        return redirect('berita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita, $id)
    {
        $berita = Berita::find($id);
        $berita->delete();
        return redirect('berita');
    }
}
