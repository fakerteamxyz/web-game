<!-- resources/views/postingans/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Buat Postingan</h1>

    <form action="{{ route('postingans.store') }}" method="POST" enctype="multipart/form-data" class="create-form">
        @csrf
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" required>

        <label for="judul">Judul</label>
        <input type="text" id="judul" name="judul" required>

        <label for="konten">Konten</label>
        <textarea id="konten" name="konten" rows="5" required></textarea>

        <label for="gambar">Gambar</label>
        <input type="file" id="gambar" name="gambar">

        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
@endsection
