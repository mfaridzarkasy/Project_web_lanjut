@extends('layout.template')

@section('title', 'Homepage')

@section('content')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h1>Televisi Pemoggraman</h1>
    <div class="row">
        @foreach ($televisis as $televisi)
            <div class="col-lg-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $televisi['nama'] }}</h5>
                                <p class="card-text">{{ $televisi['deskripsi'] }}</p>
                                <a href="/televisi/{{ $televisi['id'] }}" class="btn btn-dark">Lihat Selanjutnya</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="/images/{{ $televisi['foto_sampul'] }}" class="img-fluid rounded-end" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="d-flex justify-content-center">
            {{ $televisis->links() }}
        </div>
    </div>
@endsection
