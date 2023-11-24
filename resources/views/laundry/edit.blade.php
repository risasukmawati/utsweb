@extends('layout.master')

@section('title', 'Ubah Buku')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/buku') }}">Buku</a></li>
    <li class="breadcrumb-item active">Ubah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Form Ubah laundry</h4>
            </div>
        </div>
        <form action="{{ url('/laundry/' . $id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div>
                    <label class="form-label">Kode laundry</label>
                    <input class="form-control" type="text" name="kodebk" value="{{ $datalaundry->kodebk }}">
                </div>
                <div>
                    <label class="form-label">Nama Barang</label>
                    <input class="form-control" type="text" name="nama" value="{{ $datalaundry->nama }}">
                </div>
                <div>
                    <label class="form-label">Berat</label>
                    <input class="form-control" type="text" name="beratlaundry" value="{{ $datalaundry->beratlaundry }}">
                </div>
                <div>
                    <label class="form-label">Jenis Laundry</label>
                    <input class="form-control" type="text" name="jenislaundry" value="{{ $datalaundry->jenislaundry }}">
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection