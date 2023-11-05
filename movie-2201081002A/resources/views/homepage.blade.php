@extends('layout.template')

@section('title', 'Homepage')

@section('content')
<div class="container mt-4">
    <h1 class="text-light text-center">_________________________Movies Terbaru________________________</h1>
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-lg-3 mb-4">
            <div class="card h-100 mb-4">
                <img src="/images/{{ $movie['foto_sampul'] }}" class="card-img-top" alt="{{ $movie['judul'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie['judul'] }}</h5>
                </div>
                <div class="card-footer bg-danger">
                    <div class="text-center">
                        <a href="/movie/{{ $movie['id'] }}" class="btn btn-success btn-sm">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
