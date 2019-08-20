<?php

namespace App\Http\Controllers;

use App\Kelompok;
use Illuminate\Http\Request;

class KelompokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelompok = \App\Kelompok::all();
        return view('pages.kelompok.index',['kelompok'=>$kelompok]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // \App\Kelompok::create($request->all());
        return view('pages.kelompok.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $kelompok=\App\Kelompok::find()
        // dd($request);
        \App\Kelompok::create([
            'nama' => $request->nama,
            'pendamping' => $request->pendamping,
        ]);
        return redirect('kelompok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kelompok  $kelompok
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kelompok = \App\Kelompok::find($id);
        return view('pages.kelompok.edit',['kelompok'=>$kelompok]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kelompok  $kelompok
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $kelompok = \App\Kelompok::find($id);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kelompok  $kelompok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kelompok = \App\Kelompok::find($id);
        $kelompok->update($request->all());
        return redirect('kelompok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kelompok  $kelompok
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelompok = \App\Kelompok::destroy($id);
        // $kelompok->delete($kelompok);
        return redirect('kelompok');
    }
}
