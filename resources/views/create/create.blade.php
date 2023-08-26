
<!DOCTYPE html>
<html lang="en">

@include('create.head')

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
@include('create.navbar')

 @include('create.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Posting your Photo with GIFO</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <a href="/create/add" class="btn btn-primary btn-sm">Add Product</a>
    </div>
    
    @if (session('pesan'))
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-check"></i>Success</h5>
      {{ session('pesan') }}
    </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>Categories</td>
                <td>Title</td>
                <td>Description</td>
                <td>Photo</td>
                <td>Action</td>
            </tr>
        </thead>

        <tbody>
          @foreach ($postings as $data)
          <tr>
              <td>{{ $data->categories }}</td>
              <td>{{ $data->title }}</td>
              <td>{{ $data->description }}</td>
              <td><img src="{{ url('photo_posting/' . $data->photo) }}" width="100px"></td>
              <td style="width: 200px">
                  <a href="create/detail/{{ $data->id }}" class="btn btn-sm btn-success">Detail</a>
                  <a href="create/edit/{{ $data->id }}" class="btn btn-sm btn-warning">Edit</a>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id }}">
                      Delete
                  </button>
              </td>
          </tr>                
      @endforeach
      </tbody>
      @foreach ($postings as $data)
      <div class="modal fade" id="delete{{ $data->id }}">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">{{ $data->title }}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah Anda Ingin Menghapus Postingan?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak</button>
              <a href="/create/delete/{{ $data->id }}" class="btn btn-outline-light">Iya</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
  </div>
  @endforeach
  
      </table>

</div>
@include('create.footer')

@include('create.script')
</body>
</html>
