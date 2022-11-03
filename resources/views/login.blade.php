@extends('layouts.app')
@section('title')
    Login
@stop
@section('content')

<div class="text-center mt-5 mb-5">
    <main class="w-100 m-auto" style="max-width: 350px;padding: 15px;">
        <form action="loginPost" method="POST">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    
            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
    
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
    </main>
</div>

@endsection
