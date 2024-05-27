<!-- resources/views/postingans/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>{{ $postingan->judul }}</h1>
    <img src="{{ asset('storage/images/' . $postingan->gambar) }}" alt="{{ $postingan->judul }}">
    <p>Oleh: {{ $postingan->nama }}</p>
    <p>{{ $postingan->created_at->format('d M Y') }}</p>
    <p>{{ $postingan->konten }}</p>
@endsection
