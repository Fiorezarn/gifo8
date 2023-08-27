
<!DOCTYPE html>
<html lang="en">

@include('adminlte.head')

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
@include('adminlte.navbar')

 @include('adminlte.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
                  <!-- ./col -->
              <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                      <div class="inner">
                          <h3>{{$totalposting}}</h3>
                          <p>Total Posting</p>
                      </div>
                      <div class="icon">
                          <i class="ion ion-cube"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-warning">
                      <div class="inner">
                          <h3>{{$totaluser}}</h3>
                          <p>User Registrations</p>
                      </div>
                      <div class="icon">
                          <i class="ion ion-person-stalker"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                      <div class="inner">
                          <h3>{{$totaladmin}}</h3>
                          <p>Role Admin</p>
                      </div>
                      <div class="icon">
                          <i class="ion ion-person"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
              </div>
              <!-- ./col -->
          </div>
    
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Admin GIFO</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <P>Jumlah Content : {{$totalposting}}</P>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    {{-- <a href="/dashboard/add" class="btn btn-primary btn-sm">Add Product</a>
    <br><br> --}}
    
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
                <td>No</td>
                <td>User</td>
                <td>Categories</td>
                <td>Title</td>
                <td>Description</td>
                <td>Photo</td>
                <td>Action</td>
            </tr>
        </thead>

        <tbody>
          <?php $no=1; ?>
          @foreach ($admin as $item)
          <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $item->name_user }}</td>
              <td>{{ $item->categories }}</td>
              <td>{{ $item->title }}</td>
              <td>{{ $item->description }}</td>
              <td><img src="{{ url('photo_posting/' . $item->photo) }}" width="100px"></td>
              <td>
                  <a href="dashboard/detail/{{ $item->id }}" class="btn btn-sm btn-success">Detail</a>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $item->id }}">
                      Delete
                  </button>
              </td>
          </tr>                
      @endforeach
      </tbody>
      @foreach ($admin as $item)
      <div class="modal fade" id="delete{{ $item->id }}">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">{{ $item->title }}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah Anda Ingin Menghapus Product?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak</button>
              <a href="/dashboard/delete/{{ $item->id }}" class="btn btn-outline-light">Iya</a>
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
</div>
@include('adminlte.footer')

@include('adminlte.script')
</body>
</html>
