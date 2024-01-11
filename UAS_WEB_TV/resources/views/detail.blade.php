@extends('layout.template')

@section('title', $televisi ? $televisi->nama : 'Detail Televisi')

@section('content')
    @if ($televisi)
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-9">
                    <div class="card-body">
                        <h2 class="card-title">{{ $televisi->nama }}</h2>
                        <p class="card-text">{{ $televisi->deskripsi }}</p>
                        <p class="card-text">Kategori :
                            {{ $televisi->category ? $televisi->category->nama_kategori : 'Tidak ada kategori' }}</p>
                        <p class="card-text">Tahun : {{ $televisi->tahun }}</p>
                        <p class="card-text">Perusahaan : {{ $televisi->perusahaan }}</p>
                        <a href="/" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="/images/{{ $televisi->foto_sampul }}" class="img-fluid rounded-end" alt="...">
                </div>
            </div>
        </div>
    @else
        <p>Data televisi tidak ditemukan.</p>
    @endif
@endsection
