@extends('layouts.app')
@section('title', 'Gifo8')
@section('css', '/css/styles.css')
@section('content')
        <!-- Masthead-->
        <header class="masthead" id="header-main">
            <div class="container">
                <div class="masthead-heading text-uppercase">Welcome To Gates Inspirated Fashion Outfit</div>
                <div class="masthead-subheading">Temukan Inspirasi Berpakaian Sesuai Genre Kesukaan Kalian</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="/home">Lets Join With Us</a>
            </div>
        </header>
    
        <!-- PROFIL Grid-->
        <section class="page-section " id="main">
                <input class="finder" type="text" placeholder="  Pencarian">
                <div id="subMenu">
                    <a class="kategori" >Pakaian</a>
                    <a class="kategori" >Celana</a>
                    <a class="kategori" >Suit</a>
                    <a class="kategori" >Women</a>
                    <a class="kategori" >Man</a>
                    <a class="kategori" >Formal</a>
                </div>
                <div class="myBoard" >
                @foreach ($postings as $posting)    
                    <div class="card-myBoard">
                        <div class="card-image">
                            <img src="{{ url('photo_posting/' . $posting->photo) }}" alt="{{ $posting-> title }}" width="300">
                        </div>
                        <div class="card-body">
                            <h1 class="card-title">{{ $posting-> title }}</h1>
                            <p class="card-sub-title">{{ $posting-> categories }}</p>
                            <p class="card-info">{{ $posting-> description }}</p>
                        </div>
                    </div>
                @endforeach
                </div>
        </section>
       
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
@endsection