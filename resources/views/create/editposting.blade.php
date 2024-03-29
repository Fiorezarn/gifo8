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
                            <h1 class="m-0">Edit Product</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <form action="/create/update/{{ $posting->id }}" method="POST" enctype="multipart/form-data">
                        @csrf

                                    <div class="form-group">
                                        <label for="">Categorie</label>
                                        <input name="categories" class="form-control" value="{{ $posting->categories }}">
                                        <div class="text-danger">
                                        @error('categories')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Title</label>
                                        <input name="title" class="form-control" value="{{ $posting->title }}">
                                        <div class="text-danger">
                                        @error('title')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <input name="description" class="form-control" value="{{ $posting->description }}">
                                        <div class="text-danger">
                                        @error('description')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="col-sm 12">
                                        <div class="col-sm-4">
                                            <img src="{{ url('photo_posting/' . $posting->photo) }}" width="150px">
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
