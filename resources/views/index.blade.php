@extends('layouts.app')

@section('title', 'Test')


@section('content')

<div class="container p-3">
    <h1>Data Siswa</h1>
    <a class="btn btn-success p-2" href="{{ url('index/create')}}">+ Buat Blog</a>

    
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
              </tr>
            </thead>
            <tbody>
              @php($number= 1)
    @foreach($plus as $p)
    <tr>
      <th scope="row">{{ $number }}</th>
      <td>{{ $p->nama }}</td>
      <td>{{ $p->kelas }}</td>
      <td style="width:5%"><a class="btn btn-warning" href="{{ url("index/$p->id/edit") }}">Edit</a></td>
      <td style="width:5%">
      <form method="POST" class="" action="{{ url("index/$p->id/destroy") }}" >
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">Hapus</button>
      </form>
      </td>

    </tr>
    @php($number++)
    @endforeach
  </tbody>
</table>



</div>


    

    </div>




@endsection