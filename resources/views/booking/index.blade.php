@extends('layouts.app')

@section('content')

<div class = "container">

    <h3> 
        Daftar Booking
        <a class="btn btn-primary btn-sm float-end" href="{{ url('booking/create') }}">Tambah Data</a>
    </h3>

    <table class ="table table-bordered">
        <tr>
            <th>NO</th>
            <th>ID PERAWATAN</th>
            <th>TANGGAL</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($rows as $row)
        <tr>
        <td>{{ $row->booking_id }}</td>
        <td>{{ $row->booking_id_perawatan }}</td>
        <td>{{ $row->booking_tgl }}</td>
        <td><a href="{{ url('booking/' . $row->booking_id . '/edit') }}">Edit</a></td>
                    <td>
                        <form action="{{ url('booking/' . $row->booking_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>Hapus</button>
        </tr>
        @endforeach

    </table>


</div>
@endsection