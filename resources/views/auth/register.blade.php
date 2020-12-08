@extends('auth.app')

@section('title', 'Register')

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
    <form method="POST" action="{{ route('auth.register') }}">
        @csrf
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
            <small class="form-text text-muted">Must be unique. You will login with it!</small>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password">
            <smal class="form-text text-muted">More 8 digits</small>
        </div>
        <div class="form-group">
            <label>Re-password</label>
            <input type="password" class="form-control" name="repassword">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
@endsection