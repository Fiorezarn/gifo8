<!DOCTYPE html>
<html lang="en">

@include('create.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        {{-- <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('AdminLTE/dist') }}//img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60">
        </div> --}}

        @include('create.navbar')

        @include('create.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Add Posting</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <form action="/create/insert" method="POST" enctype="multipart/form-data">
                        @csrf
    
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label for="">Title</label>
                                        <input name="title" class="form-control" value="{{ old('title') }}">
                                        <div class="text-danger">
                                        @error('title')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Categories</label>
                                        <select name="categories" class="form-control">
                                            <option value="">Select Category</option>
                                            <option value="Pakaian" {{ old('categories') === 'Pakaian' ? 'selected' : '' }}>Pakaian</option>
                                            <option value="Celana" {{ old('categories') === 'Celana' ? 'selected' : '' }}>Celana</option>
                                            <option value="Suit" {{ old('categories') === 'Suit' ? 'selected' : '' }}>Suit</option>
                                            <option value="Woman" {{ old('categories') === 'Woman' ? 'selected' : '' }}>Woman</option>
                                            <option value="Man" {{ old('categories') === 'Man' ? 'selected' : '' }}>Man</option>
                                            <option value="Feminism" {{ old('categories') === 'Feminism' ? 'selected' : '' }}>Feminism</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                        <div class="text-danger">
                                            @error('categories')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    

                                    
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <input name="description" class="form-control" value="{{ old('description') }}">
                                        <div class="text-danger">
                                        @error('description')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">Photo</label>
                                        <input type="file" name="photo" class="form-control">
                                        <div class="text-danger">
                                        @error('photo')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <a href="/create" class="btn btn-danger btn-sm">Close</a>
                                        <button class="btn btn-primary btn-sm">Save</button>
                                    </div>
                    </form>
                </div>
            </div>
        </div>
                </div><!-- /.container-fluid -->
            </div>
    </div>

</div>
    @include('create.footer')


    @include('create.script')
</body>

</html>
