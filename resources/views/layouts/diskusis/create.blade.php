<!-- resources/views/diskusis/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Buat Diskusi</h1>
    <form action="{{ route('diskusis.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="namauser">Nama</label>
            <input type="text" id="namauser" name="namauser" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" id="judul" name="judul" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="konten">Konten</label>
            <textarea id="konten" name="konten" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
@endsection
