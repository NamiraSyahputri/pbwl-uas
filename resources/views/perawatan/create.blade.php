@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Tambah Data Perawatan</h3>
        <form action="{{ url('/perawatan') }}" method="POST">
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
                <input type="submit" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection
