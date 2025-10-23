@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Data Mahasiswa</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Tambah Mahasiswa</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Angkatan</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach ($mahasiswa as $mhs)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->jurusan }}</td>
            <td>{{ $mhs->angkatan }}</td>
            <td>
                <form action="{{ route('mahasiswa.destroy',$mhs->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$mhs->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection