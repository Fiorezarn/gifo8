@extends('layouts.app')
@section('title', 'Gifo8')
@section('css', '/css/styles.css')
@section('content')

    <header class="masthead" id="header-main">
            <div class="container">
                <div class="h5" id="update-date"></div>
                <div class="masthead-subheading">Temukan inspirasi gaya ootd Laki favorit anda sekarang</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#main-laki">Temukan</a>
            </div>
    </header>
    <section class="page-section " id="main-laki">
                <input class="finder" type="text" id="searchInput" placeholder="  Pencarian">
                <div class="myBoard" >
                @foreach ($posting as $posting)    
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
        
        const searchInput = document.getElementById('searchInput');
        const postings = document.querySelectorAll('.card-myBoard');

        searchInput.addEventListener('input', function() {
            const query = searchInput.value.toLowerCase();

            postings.forEach(posting => {
                const title = posting.querySelector('.card-title').textContent.toLowerCase();
                const description = posting.querySelector('.card-info').textContent.toLowerCase();
                const category = posting.querySelector('.card-sub-title').textContent.toLowerCase();

                if (title.includes(query) || description.includes(query) || category.includes(query)) {
                    posting.style.display = 'block';
                } else {
                    posting.style.display = 'none';
                }
            });
        });
    });
</script>

@endsection