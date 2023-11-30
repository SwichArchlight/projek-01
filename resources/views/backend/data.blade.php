@extends('adminlte::page')

@section('title','dashboard')


@section('content')
<div class="pt-2">
     <div class="card ">
   <div class="card-header bg-primary">
     <h2>Data Siswa</h2>
   </div>
   <div class="alert alert-warning d-flex mt-2 mx-5">
    <i class="fas fa-fw fa-info-circle mr-3 mt-1"></i>
    <marquee> Pastikan datamu sudah terupdate dengan benar </marquee>
   </div>
   <div class="card-body p-2">
    <a class="btn btn-primary m-3" href="../admin/tambah-data" role="button"> <i class="fas fa-plus"></i> Tambah Data Siswa </a>
    <button class="btn btn-danger" onclick="window.print()"> <i class="fas fa-print"></i> print </button>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr class="table-active">
                <th scope="col">No</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Gambar</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
               
                @foreach ($siswa as $siswa)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $siswa->nama }}</td>    
                    <td>{{ $siswa->kelas }}</td>    
                    <td>{{ $siswa->jurusan }}</td>    
                    <td><img src="{{ asset('images/'.$siswa->image) }}" width="70px" height="70px"></td>    
                    <td>
                        <a class="btn btn-primary mb-1" href="data/edit/{{ $siswa->id }}" role="button"> <i class="fas fa-cog"></i> Edit</a>
                        <a class="btn btn-danger mb-1" href="data/delete/{{ $siswa->id }}" role="button" data-confirm-delete="true">  <i class="fas fa-trash"></i> Hapus </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
   </div>
 </div>    
</div>
@include('sweetalert::alert')
@stop
    
