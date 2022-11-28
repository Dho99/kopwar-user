@extends('layouts/main')

<div class="container bg-blue mt-5">
    
    <main class="align-items-center mt-3 p-5">
        <div class="text-center fs-1 mb-4 fw-semibold">Log in</div>
        <div class="container">
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
        </div>

    </main>
</div>