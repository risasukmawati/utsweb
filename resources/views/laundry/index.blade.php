@extends('layout.master')

@section('title', 'laundry')

@section('breadcrumb')
    <li class="breadcrumb-item active">laundry</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    <h4 class="card-title">Data laundry</h4>
                </div>
                <div class="col-2">
                    <a class="btn btn-sm btn-primary float-end" href="{{ url('/laundry/create') }}">Tambah</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Kode laundry</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">berat</th>
                        <th scope="col">Jenis laundry</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datalaundry as $db)
                        <tr>
                            <td>{{ $db->kodelaundry }}</td>
                            <td>{{ $db->nama }}</td>
                            <td>{{ $db->beratlaundry }}</td>
                            <td>{{ $db->jenislaundry }}</td>
                            <td class="float-end">
                                <a class="btn btn-sm btn-warning"
                                    href="{{ url('/laundry/' . $db->id . '/edit') }}">Ubah</a>
                                    <a class="btn btn-sm btn-info"
                                    href="{{ url('/laundry/' . $db->id) }}">View</a>
                                <form style="display: inline;" action="{{ url('/laundry/' . $db->id) }}" method ="POST">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
