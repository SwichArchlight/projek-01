@extends('adminlte::page')

@section('title','Tambah Data Siswa')

@section('content_header')
<h1>Edit Data Siswa</h1>    
@endsection

@section('content')  
    <div class="card">
        <div class="card-body">      
            <form method="post" action="../update/{{ $siswa->id }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <label for="" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama_siswa" placeholder="Nama" value="{{ $siswa->nama }}">
                <label for="" class="form-label">Kelas</label>
                <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Kelas" value="{{ $siswa->kelas }}">
                <label for="" class="form-label">Jurusan</label>
                <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan" value="{{ $siswa->jurusan }}">
                <label for="" class="form-label">Image</label>
                <img src="{{ asset('images/'.$siswa->image) }}"  height="70px">
                <input type="file" class="form-control" name="image" id="image" placeholder="Jurusan" value="">
                <button type="submit" class="btn btn-success mt-4">Submit</button>
          </form>  
              </div>
    </div>

    
@stop
    
