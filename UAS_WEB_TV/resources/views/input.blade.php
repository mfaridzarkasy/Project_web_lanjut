@extends('layout.template')
@section('title', 'Input Data Televisi')
@section('content')
    <h2 class="mb-4">Tambah Televsis Pemoggraman Baru</h2>
    <form action="/televisi/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="id" class="form-label">ID Televisi:</label>
            <input type="text" class="form-control" id="id" name="id" required="">
        </div>
        <div class="mb-3">
            <label for="judul" class="form-label">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" required="">
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Kategori:</label>
            <select name="category_id" id="category_id" class="form-select" required>
                <option value="">Pilih Kategori</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi:</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required=""></textarea>
        </div>
        <div class="mb-3">
            <label for="tahun" class="form-label">Tahun:</label>
            <input type="number" class="form-control" id="tahun" name="tahun" required="">
        </div>
        <div class="mb-3">
            <label for="pemain" class="form-label">Perusahaan:</label>
            <input type="text" class="form-control" id="perusahaan" name="perusahaan" required="">
        </div>
        <div class="mb-3">
            <label for="foto_sampul" class="form-label">Foto Sampul:</label>
            <input type="file" class="form-control" id="foto_sampul" name="foto_sampul" required="">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/movies/data" class="btn btn-danger">Batal</a>
        </div>
    </form>
@endsection
