@extends('auth.app')
@section('title', 'Login')

@section('headlogin')
    <p>Have no account???</p>
    <a class="btn btn-primary btn-lg" href="{{ route('register') }}" role="button">Register</a>
@endsection

@section('container')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('auth.login') }}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="remember">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
@endsection