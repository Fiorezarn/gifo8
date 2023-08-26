<!DOCTYPE html>
<html lang="en">

@include('create.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('create.navbar')

        @include('create.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <table class="table">
        <tr>
            <th width="100px">Categories</th>
            <th width="30px">:</th>
            <th>{{ $posting->categories }}</th>
        </tr>
        <tr>
            <th width="100px">Title</th>
            <th width="30px">:</th>
            <th>{{ $posting->title }}</th>
        </tr>
        <tr>
            <th width="100px">Description</th>
            <th width="30px">:</th>
            <th>{{ $posting->description }}</th>
        </tr>
        <tr>
            <th width="100px">Photo</th>
            <th width="30px">:</th>
            <th><img src="{{ url('photo_posting/' . $posting->photo) }}" width="400px"></th>
        </tr>
        <tr>
            <th><a href="/create" class="btn btn-success btn-sm">Back</a></th>
        </tr>
    </table>
  </div>
  
</div>
@include('create.footer')

    @include('create.script')
</body>

</html>
