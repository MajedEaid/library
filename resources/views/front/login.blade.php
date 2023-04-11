@extends('front.parent')

@section('title', 'Login Page')

@section('styles')

@endsection

@section('content')
<header>
    <div class="login ">
        <h2>Login to your account</h2>
        <div>
            <form action="">
                <label for="">Email</label>
                <input type="email" placeholder="Email">
                <label for="">Password</label>
                <input type="password" placeholder="password">
                <input type="submit" class="submit-input" value="Login">
            </form>
        </div>
    </div>
</header>
@endsection

@section('scripts')


@endsection
