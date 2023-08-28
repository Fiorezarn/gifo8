@extends('layouts.login')
@section('title', 'Gifo8')
@section('css', '/css/login.css')
@section('content')
  <section id="login">
    <div class="container-fluid h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-md-9 text-center text-white">
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-11 col-md-5">
              <div class="login-box">
                <p>Login</p>
                @if (session()->has('loginError'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif

                <form action="{{ route('login') }}" method="POST">
                  @csrf
                  <div class="user-box">
                    <input required="" name="email" type="text" class="@error('email') is-invalid @enderror"
                      value="{{ old('email') }}" />
                    <label>Email</label>
                    @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="user-box">
                    <input required="" name="password" type="password" class="@error('password') is-invalid @enderror"
                      value="{{ old('password') }}" />
                    <label>Password</label>
                    @error('password')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <button type="submit">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Submit
                  </button>
                </form>
                <p class="regist">
                  Belum Punya Akun?
                  <a href="{{ route('register') }}">
                    Register
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
