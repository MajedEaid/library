@extends('front.parent')

@section('title', 'Home page')

@section('styles')

@endsection

@section('content')

        <header class="header-home ">
            <div class="container">
            <div class="overlay">
                <div class="cont-header-homein">
                <div><h1>Search about any Book you need</h1></div>
            <div class="input-search-div-i">
            <input type="search" class="input-search" placeholder="Search"> <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="row text-center cont-divs">
            <div class="col-4 col-lg-4 col-md-4"><i class="fa-solid fa-book"></i> <h2>3</h2> <p>Books</p></div>
            <div class="col-4 col-lg-4 col-md-4"><i class="fa-solid fa-users"></i><h2>2</h2> <p>Users</p></div>
            <div class="col-4 col-lg-4 col-md-4"><i class="fa-duotone fa-comet"></i> <h2>1</h2> <p>Categories</p></div>
            </div>
            </div>
            </div>
        </div>
        </header>
        <section class="about text-center container">
        <div class="div-about-cont">
    <h2>About Our Library</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae omnis rerum assumenda itaque veniam quam fugiat, architecto quidem dolorum repellendus facilis temporibus.</p>
    </div>
    </section>

        <section class="section1-dive-whites text-center">
        <div class="overlay">
        <h2>Expololre our latest Categories</h2>
        <div class="container">
        <div class="row dvis">
            @foreach ($categories as $category)
            <div class="div-tresperd col-6 col-lg-4 col-md-4"><span>{{ $category->name }}</span></div>
        @endforeach
    </div>
    </div>
    </div>
        </section>

        <section class="section-cards">
        <div class="container text-center">
            <h2>Expololre our later books</h2>
        <div class="row cards">
            @foreach ($books as $book)
            <div class="card col-12 col-lg-4 col-md-4" style="width: 18rem;">
                <img src="{{asset('storage/images/book/'.$book->image ?? "")}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="card-text">{{ $book->short_description }}</p>
                    <a href="{{ route('det.page') }}" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            @endforeach
        </div>
        </div>
        </section>
        @endsection

        @section('scripts')

        @endsection
