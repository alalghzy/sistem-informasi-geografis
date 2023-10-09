@extends('admin.layouts.main')

@section('content')

<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none"><i class="bi bi-justify fs-3"></i> Menu</a>
</header>

<div class="page-heading col-12 col-lg-12">
    <div class="row">
        <div class="col-sm-8">
            <h3>Data Objek</h3>
        </div>
        <div class="col-sm-4" style="display: flex; justify-content: flex-end;">
            <div class="text-gray-600" id="clock2"></div><p class="text-gray-600">&nbsp; | &nbsp;</p>
            <div class="text-gray-600" id="clock"></div>
        </div>
        <hr>
    </div>
</div>

<div class="page-content">

    <section class="row">

        <div class="col-12 col-lg-12">

            <div class="row">

                <div class="col-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tabel Data</h4>
                            <hr>
                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalCreate" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah data"><i class="bi bi-plus-square fs-5"></i> &ensp;Tambah Data</button><button class="btn btn-danger btn-sm removeAll ms-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus semua data yang dipilih"><i class="bi bi-trash fs-5"></i> Hapus Data Terpilih</button>
                            @include('admin.modalCreate')
                        </div>

                        <div class="card-body">
                            <table id="tabel-data" class="table table-bordered table-lg">
                                <thead>
                                <tr>
                                    <th><input type="checkbox" id="checkboxesMain"></th>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th style="text-align: center">Aksi</th>
                                </tr>
                            </thead>
                                @if($posts->count())
                                @foreach($posts as $key => $post)
                                <tr id="tr_{{$post->id_post}}">
                                    <td><input type="checkbox" class="checkbox" data-id="{{$post->id_post}}"></td>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $post->nama }}</td>
                                    <td>{{ $post->deskripsi }}</td>
                                    <td>{{ $post->latitude }}</td>
                                    <td>{{ $post->longitude }}</td>
                                    <td class="text-center" style="width: 200px">
                                        <button type="button" class="btn btn-sm btn-primary mb-2"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modalEdit-{{ $post->id_post }}"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Edit data">
                                            <i class="bi bi-pencil-square fs-6"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-danger mb-2"
                                            data-bs-toggle="modal"
                                            data-bs-target="#hapusdata-{{ $post->id_post }}"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Hapus data">
                                            <i class="bi bi-trash fs-6"></i>
                                        </button>
                                    </td>
                                    @include('admin.modalEdit')
                                    @include('admin.modalHapus')

                                </tr>
                                @endforeach
                                @else
                                <div class="alert alert-danger">
                                    Data belum tersedia, silahkan &ensp;<button style="font-size: 10px;" type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalCreate" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit data"><i class="bi bi-plus-square "></i> Tambah Data</button> &ensp;!
                                </div>
                                @endif
                             </table>
                        </div>
                    </div>
                </div>
                @include('admin.modalMap')
            </div>
@endsection
