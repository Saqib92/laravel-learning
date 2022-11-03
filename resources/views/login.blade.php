@extends('layouts.app')
@section('title')
    Login
@stop
@section('content')

@if ($errors->any())
<div class="container mt-3">
    <div class="alert alert-danger" role="alert">
        {{ $errors->first() }}
    </div>
</div>
@endif

<div class="text-center mt-5 mb-5">
    <main class="w-100 m-auto" style="max-width: 350px;padding: 15px;">
        <form action="loginPost" method="POST">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    
            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                @error('email')
                    <strong class="text-danger">{{ $message }}*</strong>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                @error('password')
                    <strong class="text-danger">{{ $message }}*</strong>
                @enderror
            </div>
    
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign In</button>
        </form>
    </main>
</div>

@endsection
