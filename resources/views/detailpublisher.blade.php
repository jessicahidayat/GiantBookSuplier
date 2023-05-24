@extends('template.main')
@section('content')
    <div class="container-fluid px-5 py-5">
        <h3>{{ $detailPublishers->name }}</h3>
        <h3>{{ $detailPublishers->address }}</h3>
        <h3>{{ $detailPublishers->phone }}</h3>
        <h3>{{ $detailPublishers->email }}</h3>

        <div class="container-fluid row">
            @foreach ($detailbooks as $b)
                <div class="card my-3 mx-2" style="width: 18rem;">
                    <img src="{{ asset($b->cover) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $b->title }}</h5>
                        <p class="card-text">by : {{ $b->author }}</p>
                        <a href="{{ route('detailBook', $b->bookid) }}" class="btn btn-primary"
                            style="background-color:coral; border-color:burlywood;">Detail</a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
