<!-- resources/views/diskusis/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Diskusi</h1>
    <a href="{{ route('diskusis.create') }}" class="btn btn-primary">Buat Diskusi</a>
    <div id="diskusi-list">
        @foreach($diskusis as $diskusi)
            <div class="diskusi-item">
                <h2>{{ $diskusi->judul }}</h2>
                <p>{{ $diskusi->konten }}</p>
                <a href="{{ route('diskusis.show', $diskusi->id) }}" class="btn btn-secondary">Lihat Selengkapnya</a>
            </div>
        @endforeach
    </div>
@endsection
