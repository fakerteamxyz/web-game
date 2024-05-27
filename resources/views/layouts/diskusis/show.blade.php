<!-- resources/views/diskusis/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>{{ $diskusi->judul }}</h1>
    <p>Oleh: {{ $diskusi->namauser }}</p>
    <p>{{ $diskusi->created_at->format('d M Y') }}</p>
    <p>{{ $diskusi->konten }}</p>
    <h3>Komentar</h3>
    <p>{{ $diskusi->komentar }}</p>
    <form action="{{ route('diskusis.storeComment', $diskusi->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="komentar">Komentar</label>
            <textarea id="komentar" name="komentar" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Komentar</button>
    </form>
@endsection
