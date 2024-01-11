@extends('layout.template')

@section('title', 'Data Televisi Pemoggraman')

@section('content')

    <h1>Data Televisi</h1>
    <a href="/televisis/create" class="btn btn-dark">Input Televisi</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Kategori</th>
                <th scope="col">Tahun</th>
                <th scope="col">Perusahaan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($televisis as $televisi)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $televisi->nama }}</td>
                    <td>{{ $televisi->category->nama_kategori }}</td>
                    <td>{{ $televisi->tahun }}</td>
                    <td>{{ $televisi->perusahaan }}</td>
                    <td class="text-nowrap">
                        <a href="/televisi/{{ $televisi['id'] }}/edit" class="btn btn-warning">Edit</a>
                        <a href="/televisi/delete/{{ $televisi->id }}" class="btn btn-dark"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $televisis->links() }}
    </div>
@endsection
