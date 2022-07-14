@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Edit Data Perawatan</h3>
        <form action="{{ url('/perawatan/' . $row->perawatan_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>Nama Perawatan</label>
                <input type="text" class="form-control" name="perawatan_nama" value="{{ $row->perawatan_nama }}"></>
            </div>
            <div class="mb-3">
                <label>Jenis Perawatan</label>
                <input type="text" class="form-control" name="perawatan_jenis" value="{{ $row->perawatan_jenis }}"></>
            </div>
            <div class="mb-3">
                <label>Harga Perawatan</label>
                <input type="text" class="form-control" name="perawatan_harga" value="{{ $row->perawatan_harga }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection
