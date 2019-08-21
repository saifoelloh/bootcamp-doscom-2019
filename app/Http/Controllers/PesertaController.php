<?php

namespace App\Http\Controllers;

use App\Kelompok;
use App\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesertas = Peserta::with('kelompok')->get();
        return view('pages.peserta.index', [
            'pesertas' => $pesertas
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
        $validatedData = $request->validate([
            'nim' => 'unique:pesertas|required',
            'nama' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'gender' => 'required',
            'telegram' => 'nullable'
        ]);
        Peserta::create($validatedData);
        return redirect('/')->with('message', 'Pendaftaran berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pesertas = Peserta::find($id);
        return view('pages.peserta.edit', [
            'pesertas' => $pesertas,
            'kelompoks' => \App\Kelompok::all()
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pesertas = Peserta::find($id);
        $pesertas->update($request->all());
        return redirect('peserta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peserta = Peserta::destroy($id);
        return redirect('peserta');
    }
}
