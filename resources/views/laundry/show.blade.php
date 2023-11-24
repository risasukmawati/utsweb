@extends('layout.master')

@section('title', 'Ubah laundry')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/laundry') }}">laundry</a></li>
    <li class="breadcrumb-item active">Tampilkan</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-header">Tampilkan</div>
            <div class="card-body">
             
           
                  <div class="card-body">
                  <p class="card-text">Kode laundry :{{ $datalaundry->kodelaundry }}</p>
                  <p class="card-text">Nama : {{ $datalaundry->nama }}</p>
                  <p class="card-text">Berat : {{ $datalaundry->beratlaundry }}</p>
                  <p class="card-text">Jenis laundry: {{ $datalaundry->jenislaundry }}</p>
                  <a class="btn btn-sm btn-warning" href="{{ url('/laundry/') }}">Kembali</a>
              </hr>
            </div>
          </div>
@endsection