@extends('front.parent2')

@section('title', 'Details page')

@section('styles')

@endsection

@section('content')



        <header class="header-diteals">
    <div class="container text-center">
        @foreach ($books as $book)
        <div class="row">
            <div class="diteals-card col-12 col-lg-6 col-md-6"><img src="{{asset('storage/images/book/'.$book->image ?? "")}} " class="img-diteals" alt=""></div>
        <div class="diteals-card col-12 col-lg-6 col-md-6 text-start"><h3>Book</h3>
                <h5>prices : <span>{{ $book->price }}$</span></h5>
                <div class="line"></div>
                <h6>maiores et rstione v</h6>
                <a href="{{ route('card.page') }}"><i class="fa-regular fa-cart-shopping"></i> Add to card</a>
        </div>
    </div>
    <p>{{ $book->full_description }}</p>
    @endforeach
    </div>
        </header>
        @endsection

        @section('scripts')

        @endsection

