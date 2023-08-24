<!DOCTYPE html>
<html lang="en">

@include('adminlte.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        {{-- <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('AdminLTE/dist') }}//img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60">
        </div> --}}

        @include('adminlte.navbar')

        @include('adminlte.sidebar')

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
                    <form action="/dashboard/update/{{ $product->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
    
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Id product</label>
                                        <input name="id" class="form-control" value="{{ $product->id }}"
                                            readonly>
                                        <div class="text-danger">
                                            @error('id')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">No product</label>
                                        <input name="no_produk" class="form-control" value="{{ $product->no_produk }}">
                                        <div class="text-danger">
                                        @error('no_produk')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Nama Product</label>
                                        <input name="nama_produk" class="form-control" value="{{ $product->nama_produk }}">
                                        <div class="text-danger">
                                        @error('nama_produk')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Stock</label>
                                        <input name="stock" class="form-control" value="{{ $product->stock }}">
                                        <div class="text-danger">
                                        @error('stock')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="col-sm 12">
                                        <div class="col-sm-4">
                                            <img src="{{ url('product-img/' . $product->photo) }}" width="150px">
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
                                        <label for="">Deskripsi</label>
                                        <input name="deskripsi" class="form-control" value="{{ $product->deskripsi }}">
                                        <div class="text-danger">
                                        @error('deskripsi')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Harga</label>
                                        <input name="harga" class="form-control" value="{{ $product->harga }}">
                                        <div class="text-danger">
                                            @error('harga')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <a href="/dashboard" class="btn btn-danger btn-sm">Close</a>
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
    @include('adminlte.footer')


    @include('adminlte.script')
</body>

</html>
