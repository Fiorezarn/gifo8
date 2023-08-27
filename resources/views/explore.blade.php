@extends('layouts.app')
@section('title', 'Gifo8')
@section('css', '/css/styles.css')
@section('content')
    <header class="masthead">
            <div class="container">
                <div class="h5" id="update-date"></div>
                <div class="masthead-subheading">find your inspiration</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#main-explore">Find Now</a>
            </div>
    </header>
    
    <section class="page-section-explore " id="main-explore">
            <div class="myBoard-explore">
                <div class="card-myBoard-explore">
                    <a href="explore/pakaian">
                        <div class="card-image-explore">
                            <img src="../../kategori/pakaian.jpg" alt="Chica posando en su bicicleta" width="300">
                        </div>
                        <div class="card-body-explore">
                            <p class="card-info-explore">Pakaian</p>
                        </div>
                    </a>
                </div>
                <div class="card-myBoard-explore">
                    <a href="explore/celana">
                        <div class="card-image-explore">
                            <img src="../../kategori/celana.jpg" alt="Chica posando en su bicicleta" width="300">
                        </div>
                        <div class="card-body-explore">
                            <p class="card-info-explore">Celana</p>
                        </div>
                    </a>
                </div>
                <div class="card-myBoard-explore">
                    <a href="explore/suit">
                        <div class="card-image-explore">
                            <img src="../../kategori/suit.jpg" alt="Chica posando en su bicicleta" width="300">
                        </div>
                        <div class="card-body-explore">
                            <p class="card-info-explore">Suit</p>
                        </div>
                    </a>
                </div>
                <div class="card-myBoard-explore">
                    <a href="explore/women">
                        <div class="card-image-explore">
                            <img src="../../kategori/women.jpg" alt="Chica posando en su bicicleta" width="300">
                        </div>
                        <div class="card-body-explore">
                            <p class="card-info-explore">Women</p>
                        </div>
                    </a>
                </div>
                <div class="card-myBoard-explore">
                    <a href="explore/men">
                        <div class="card-image-explore">
                            <img src="../../kategori/mens.jpg" alt="Chica posando en su bicicleta" width="300">
                        </div>
                        <div class="card-body-explore">
                            <p class="card-info-explore">Men</p>
                        </div>
                    </a>
                </div>
                <div class="card-myBoard-explore">
                    <a href="explore/formal">
                        <div class="card-image-explore">
                            <img src="../../kategori/formal.jpg" alt="Chica posando en su bicicleta" width="300">
                        </div>
                        <div class="card-body-explore">
                            <p class="card-info-explore">Formal</p>
                        </div>
                    </a>
                </div>
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const updateDateElement = document.getElementById('update-date');
        const currentTimeElement = document.getElementById('current-time');

        function formatToTwoDigits(number) {
            return number.toString().padStart(2, '0');
        }

        function updateTime() {
            const now = new Date();

            const dateOptions = { year: 'numeric', month: 'long', day: 'numeric' };
            const formattedDate = now.toLocaleDateString('en-US', dateOptions);

            updateDateElement.textContent = `${formattedDate}`;
        }

        updateTime();
    });
</script>


@endsection