@extends('layouts.app')
@section('title')
    Login
@stop
@section('content')

    @if (session()->has('success'))
        <div class="container mt-3">
            <div class="alert alert-success" role="alert">
                Signup Successfull!
            </div>
        </div>
    @endif

    @if ($errors->any())
        <div class="container mt-3">
            <div class="alert alert-danger" role="alert">
                {{ $errors->first() }}
            </div>
        </div>
    @endif


    <div class="text-center mt-5 mb-5">
        <main class="w-100 m-auto" style="max-width: 350px;padding: 15px;">
            <form action="/signupPost" method="POST">
                @csrf
                <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="full_name" id="floatingInput" placeholder="John Doe">
                    <label for="floatingInput">Full Name</label>
                    @error('full_name')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="floatingInput"
                        placeholder="name@example.com">
                    <label for="floatingInput">Email</label>
                    @error('email')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="floatingPassword"
                        placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    @error('password')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="tel" class="form-control" name="phone_no" id="floatingInput"
                        placeholder="+923001234567">
                    <label for="floatingInput">Phone No.</label>
                    @error('phone_no')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="address" id="floatingInput" placeholder="House no. 1">
                    <label for="floatingInput">Address</label>
                    @error('address')
                        <strong class="text-danger">{{ $message }}*</strong>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
        </main>
    </div>

@endsection
