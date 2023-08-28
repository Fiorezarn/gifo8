@extends('layouts.login')
@section('title', 'Gifo8')
@section('css', '/css/login.css')
@section('content')
  <section id="register">
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
                <p>Register</p>
                <form action="{{ route('register') }}" method="POST">
                  @csrf
                  <div class="user-box">
                    <input required="" name="username" type="text" class="@error('username') is-invalid @enderror" value="{{ old('username') }}"/>
                    <label>Username</label>
                    @error('username')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="user-box">
                    <input required="" name="email" type="text" class="@error('email') is-invalid @enderror" value="{{ old('email') }}"/>
                    <label>Email</label>
                    @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="user-box">
                    <input required="" name="password" type="password" class="@error('password') is-invalid @enderror"/>
                    <label>Password</label>
                    @error('password')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="user-box">
                    <input required="" name="password_confirmation" type="password" class="@error('password_confirmation') is-invalid @enderror" />
                    <label>Konfirmasi Password</label>
                    @error('password_confirmation')
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
                <p class="regist">Udah Punya
                  Akun? <a href="{{ route('login') }}">
                    Login
                  </a> </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
