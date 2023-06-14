@extends('layouts.app')


@section('title',"Tambah Postingan")


@section('content')
<h1>Buat Data Siswa Baru</h1>
<form method="POST" action="{{ url('index') }}">

    @csrf 

    <div class="mb-3">
  <label for="title" class="form-label">Nama</label>
  <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="mb-3">
    <label for="title" class="form-label">Kelas</label>
    <input type="text" class="form-control" id="kelas" name="kelas" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ url("index") }}" class="btn btn-success">kembali</a>


    </form>
    </div>

@endsection