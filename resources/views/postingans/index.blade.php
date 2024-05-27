<!-- resources/views/postingans/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Postingan</h1>
    <a href="{{ route('postingans.create') }}" class="btn btn-create-postingan">Buat Postingan</a>

    <!-- Search form -->
    <form action="{{ route('postingans.index') }}" method="GET" style="display: flex; align-items: center; margin-bottom: 20px;">
        <input type="text" id="search" name="search" placeholder="Search Postingan" value="{{ request('search') }}" style="flex: 1; padding: 10px; margin-right: 10px;">
        <button type="submit" class="btn btn-primary">Enter</button>
    </form>

    <div id="postingan-list">
        @foreach($postingans as $postingan)
            <div class="postingan-item">
                <img src="{{ asset('storage/images/' . ($postingan->gambar ?? 'template.png')) }}" alt="{{ $postingan->judul }}">
                <h2>{{ Str::limit($postingan->judul, 50, '...') }}</h2>
                <p>{{ Str::limit($postingan->konten, 100, '...') }}</p>
                <a href="{{ route('postingans.show', $postingan->id) }}" class="btn btn-secondary">Lihat Selengkapnya</a>
            </div>
        @endforeach
    </div>
@endsection
