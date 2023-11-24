@extends('layout.master')

@section('title', 'Ubah member')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/member') }}">member</a></li>
    <li class="breadcrumb-item active">Tampilkan</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-header">Tampilkan</div>
            <div class="card-body">
             
           
                  <div class="card-body">
                  <p class="card-text">ID member :{{ $datamember->kodemember }}</p>
                  <p class="card-text">Nama : {{ $datamember->nama }}</p>
                  <p class="card-text">Alamat : {{ $datamember->alamat }}</p>
                  <p class="card-text">No Telephone: {{ $datamember->notelp }}</p>
                  <p class="card-text">jenis member: {{ $datamember->jenismember_nama }}</p>
                  <a class="btn btn-sm btn-warning" href="{{ url('/member/') }}">Kembali</a>
              </hr>
            </div>
          </div>
@endsection