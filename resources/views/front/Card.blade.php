@extends('front.parent2')

@section('title', 'Card Page')

@section('styles')

@endsection

@section('content')



        <header class="header-card">
        <table>
    <thead>
        <tr>
    <th>ID</th>
    <th>Image</th>
    <th>Book</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Total</th>
    <th>Delete</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
    <tr>
    <td>{{ $book->id }}</td>
    <td><img src="{{asset('storage/images/book/'.$book->image ?? "")}}" alt=""></td>
    <td>{{ $book->title }}</td>
    <td>{{ $book->price }}$</td>
    <td>2</td>
    <td>250$</td>
    <td><button  type="button" class="btn btn-danger"><i class="fa-solid fa-rectangle-xmark"></i></button></td>
    </tr>
    @endforeach
    </tbody>
    <tfoot>
        <tr>
    <td colspan="4">total</td>
    <td colspan="3">270$</td>
        </tr>
    </tfoot>
        </table>
        </header>

        @endsection

        @section('scripts')

        @endsection
