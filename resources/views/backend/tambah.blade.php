@extends('adminlte::page')

@section('title','Tambah Data Siswa')

@section('content_header')
<h1>Tambah Data Siswa</h1>    
@endsection

@section('content')  
    <div class="card">
        <div class="card-body">      
            <form method="post" action="../admin/data/store" enctype="multipart/form-data">
                @csrf
                <label for="" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama_siswa" placeholder="Nama">
                <label for="" class="form-label">Kelas</label>
                <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Kelas">
                <label for="" class="form-label">Jurusan</label>
                <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan">
                <label for="" class="form-label">Image</label>
                <input type="file" class="form-control" name="image" id="image" placeholder="Jurusan">
                <button type="submit" class="btn btn-success mt-4">Submit</button>
          </form>  
              </div>
    </div>    
@stop
    
