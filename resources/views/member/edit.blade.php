@extends('layout.master')

@section('title', 'Ubah member')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/member') }}">member</a></li>
    <li class="breadcrumb-item active">Ubah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Form Ubah member</h4>
            </div>
        </div>
        <form action="{{ url('/member/' . $id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div>
                    <label class="form-label">ID member</label>
                    <input class="form-control" type="text" name="kodemember" value="{{ $data->kodemember }}">
                </div>
                <div>
                    <label class="form-label">Nama</label>
                    <input class="form-control" type="text" name="nama" value="{{ $data->nama }}">
                </div>
                <div>
                    <label class="form-label">alamat</label>
                    <input class="form-control" type="text" name="alamat" value="{{ $data->alamat }}">
                </div>
                <div>
                    <label class="form-label">notelp</label>
                    <input class="form-control" type="text" name="notelp" value="{{ $data->notelp }}">
                </div>
                <div>
                    <label class="form-label">Jenis member</label>
                    <select class="form-select" name="jenismember">
                        @foreach ($jenismember as $j)
                            <option {{ $datamember->jenismmember_id == $j->id ? 'selected' : '' }} value="{{ $j->id }}">{{ $j->nama }}</option>
                        @endforeach
                    </select>
                    </select>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
