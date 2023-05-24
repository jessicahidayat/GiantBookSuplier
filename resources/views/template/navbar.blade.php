<nav class="navbar navbar-expand-lg" style="background-color:beige">
    <div class="container-fluid px-5">
        <a class="navbar-brand fs-3 fw-bold" href="#">Giant Book Supplier</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5">
                <li class="nav-item mx-2">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $c)
                            <li><a class="dropdown-item"
                                    href="{{ route('detailCategory', $c) }}">{{ $c->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link active" href="{{ route('publisher') }}">Publisher</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link active" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
