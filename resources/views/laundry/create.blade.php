@extends('layout.master')

@section('title', 'Tambah laundry')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/laundry') }}">laundry</a></li>
    <li class="breadcrumb-item active">Tambah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Tambah laundry</h4>
            </div>
        </div>
        <form action="{{ url('/laundry') }}" method="POST">
            <div class="card-body">
                @csrf
                <div>
                    <label class="form-label">Kode laundry</label>
                    <input class="form-control" type="text" name="kodelaundry">
                </div>
                <div>
                    <label class="form-label">Nama</label>
                    <input class="form-control" type="text" name="nama">
                </div>
                <div>
                    <label class="form-label">Berat laundry</label>
                    <input class="form-control" type="text" name="beratlaundry">
                </div>
                <div>
                    <label class="form-label">Jenis laundry</label>
                    <input class="form-control" type="text" name="jenislaundry">
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
