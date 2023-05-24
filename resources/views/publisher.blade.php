@extends('template.main')
@section('content')
    <div class="container-fluid row px-5 py-5">
        @foreach ($publishers as $p)
            <div class="card my-3 mx-2" style="width: 18rem;">
                <img src="{{ asset($p->logo) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $p->name }}</h5>
                    <p class="card-text">{{ $p->address }}</p>
                    <a href="{{ route('detailPublisher', $p->id) }}" class="btn btn-primary"
                        style="background-color:coral; border-color:burlywood;">Detail</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
