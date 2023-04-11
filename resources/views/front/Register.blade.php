@extends('front.parent')

@section('title', 'Register Page')

@section('styles')

@endsection

@section('content')

<header class="header-Reg">
    <div class="login-new ">
        <h2>Create new account</h2>
        <div>
            <form action="">
                <label for="">Name</label>
                <input type="text" placeholder="Name">
                <label for="">Email</label>
                <input type="email" placeholder="Email">
                <label for="">URL</label>
                <input type="text" placeholder="http://example.com">
                <label for="">Age</label>
                <input type="number" placeholder="18">
                <label for="">Phone Number</label>
                <input type="tel" placeholder="Phone Number">
                <label for="">Country</label>
                <input type="text" placeholder="Country">
                <label for="">Password</label>
                <input type="password" placeholder="password">
                <label for="">Confirm Password</label>
                <input type="password" placeholder="Confirm Password">
                <input type="submit" class="submit-input" value="Login">
            </form>

        </div>
    </div>
</header>

@endsection

@section('scripts')

@endsection
