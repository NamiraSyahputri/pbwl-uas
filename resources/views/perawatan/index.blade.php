@extends('layouts.app')

@section('content')

<div class = "container">

    <h3> 
        Daftar Perawatan
        <a class="btn btn-primary btn-sm float-end" href="{{ url('perawatan/create') }}">Tambah Data</a>
    </h3>

    <table class ="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>JENIS</th>
            <th>HARGA</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($rows as $row)
        <tr>
        <td>{{ $row->perawatan_id }}</td>
        <td>{{ $row->perawatan_nama }}</td>
        <td>{{ $row->perawatan_jenis }}</td>
        <td>{{ $row->perawatan_harga }}</td>
        <td><a href="{{ url('perawatan/' . $row->perawatan_id . '/edit') }}">Edit</a></td>
                    <td>
                        <form action="{{ url('kategori/' . $row->perawatan_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>Hapus</button>
        </tr>
        @endforeach

    </table>


</div>
@endsection