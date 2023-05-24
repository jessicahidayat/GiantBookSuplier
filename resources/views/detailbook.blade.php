@extends('template.main')
@section('content')
    @foreach ($books as $b)
        <div class="container-fluid my-3 d-flex" style="">
            <img src="{{ asset($b->cover) }}">

            <div class="container d-flex flex-column justify-content-center p-4">
                <h1 class="pt-1">Title : {{ $b->title }}</h1>
                <h5 class="pt-1">Author : {{ $b->author }}</h5>
                <h5 class="pt-1">Year : {{ $b->year }}</h5>
                <h5 class="pt-1">Publisher : {{ $b->name }}</h5>
                <p class="pt-4">Sinopsis : <br> {{ $b->synopsis }}</p>
            </div>
        </div>
    @endforeach
@endsection
