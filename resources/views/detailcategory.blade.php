@extends('template.main')

@section('content')
    <div class="container-fluid row px-5 py-5">
        <h1>{{ $categoriesBooks->name }}</h1>

        @foreach ($categoriesBook as $c)
            <div class="card my-3 mx-2" style="width: 18rem;">
                <img src="{{ asset($c->cover) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $c->title }}</h5>
                    <p class="card-text">by : {{ $c->author }}</p>
                    <a href="{{ route('detailBook', $c->bookid) }}" class="btn btn-primary"
                        style="background-color:coral; border-color:burlywood;">Detail</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
