@extends('layout.master')

@section('title', 'Tambah anggota')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/member') }}">member</a></li>
    <li class="breadcrumb-item active">Tambah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Tambah member</h4>
            </div>
        </div>
        <form action="{{ url('/member') }}" method="POST">
            <div class="card-body">
                @csrf
                <div>
                    <label class="form-label">ID Member</label>
                    <input class="form-control" type="text" name="kodemember">
                </div>
                <div>
                    <label class="form-label">Nama</label>
                    <input class="form-control" type="text" name="nama">
                </div>
                <div>
                    <label class="form-label">Alamat</label>
                    <input class="form-control" type="text" name="alamat">
                </div>
                <div>
                    <label class="form-label">No Telephone</label>
                    <input class="form-control" type="text" name="notelp">
                </div>
                <div>
                    <label class="form-label">Jenis Member</label>
                    <select class="form-select" name="jenismember">
                        @foreach ($jenismember as $j)
                            <option value="{{ $j->id }}">{{ $j->nama }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
