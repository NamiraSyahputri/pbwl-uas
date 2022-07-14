<?php

namespace App\Http\Controllers;
use App\Models\Perawatan;

use Illuminate\Http\Request;

class PerawatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Perawatan::all();
        return view('perawatan.index', compact('rows'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perawatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'perawatan_nama' => 'required',
                'perawatan_jenis' => 'required',
                'perawatan_harga' => 'required',
            ],
            [
                'perawatan_nama.required' => 'Nama Perawatan wajib diisi',
                'perawatan_jenis.required' => 'Jenis Perawatan Wajib diisi',
                'perawatan_harga.required' => 'Harga Perawatan wajib diisi',           
            ]
        );

       perawatan::create([
            'perawatan_nama' => $request->perawatan_nama,
            'perawatan_jenis' => $request->perawatan_jenis,
            'perawatan_harga' => $request->perawatan_harga,
        ]);

        return redirect('perawatan');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = perawtan::findOrFail($id);
        return view('perawatan.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'perawatan_nama' => 'required',
                'perawatan_jenis' => 'required',
                'perawatan_harga' => 'required',
            ],
            [
                'perawatan_nama.required' => 'Nama Perawatan wajib diisi',
                'perawatan_jenis.required' => 'Jenis Perawatan Wajib diisi',
                'perawatan_harga.required' => 'Harga Perawatan wajib diisi',           
            ]
        );

        $row = perawatan::findOrFail($id);
        $row->update([
            'perawatan_nama' => $request->perawatan_nama,
            'perawatan_jenis' => $request->perawatan_jenis,
            'perawatan_harga' => $request->perawatan_harga,

        ]);

        return redirect('perawatan');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = perawatan::findOrFail($id);
        $row->delete();

        return redirect('perawatan');
    }
}
