<?php

namespace App\Http\Controllers;
use App\Models\Booking;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Booking::all();
        return view('booking.index', compact('rows'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('booking.create');
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
                'booking_id_perawatan' => 'required',
                'booking_tgl' => 'required',
            ],
            [
                'booking_id_perawatan.required' => 'Id Perawatan Booking wajib diisi',
                'booking_tgl.required' => 'Tanggal Booking Wajib diisi',  
            ]
        );

       booking::create([
            'booking_id_perawatan' => $request->booking_id_perawatan,
            'booking_tgl' => $request->booking_tgl,
        ]);

        return redirect('booking');
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
        $row = booking::findOrFail($id);
        return view('booking.edit', compact('row'));
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
                'booking_id_perawatan' => 'required',
                'booking_tgl' => 'required',
            ],
            [
                'booking_id_perawatan.required' => 'Id Perawatan Booking wajib diisi',
                'booking_tgl.required' => 'Tanggal Booking Wajib diisi',  
            ]
        );

        $row = booking::findOrFail($id);
        $row->update([
            'booking_id_perawatan' => $request->booking_id_perawatan,
            'booking_tgl' => $request->booking_tgl,

        ]);

        return redirect('booking');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = booking::findOrFail($id);
        $row->delete();

        return redirect('booking');
    }
}
