@extends('layouts/main')

@section('container')
    
<div class="row justify-content-center mt-5">
    <div class="col-md-5 mt-5">
        
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        
        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        
        <main class="form-signin">
            <h1 class="h3 mb-4 fw-normal text-center mt-5">Please Log in</h1>
            <form action="/login" method="post">
                @csrf
                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required autofocus value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                </div>
        
                <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Log in</button>
{{-- 
                <div class="form-floating mt-2 d-flex justify-content-center">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember"><span class="ms-2">Remember Me</span>
                </div> --}}

            </form>

            <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now</a></small>
        </main>

    </div>
</div>

@endsection