<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIJALAK | upload data persebaran</title>

 @include('template.style')
  </head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('admin')}}/dist/img/faunaku2.png" alt="sijalak Logo" height="60" width="60">
  </div>

  <!-- navbar -->
        @include('template.navbar')
  <!-- /.navbar -->

  

    <!-- Sidebar -->
   @include('template.sidebar')
    <!-- /.sidebar -->

    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mr-3 mb-3">
  <div class="ml-3">
    <h1 class="m-0 text-monospace">upload data persebaran </h1>
    <br class="mb-3">
    @foreach($editpersebaran as  $e)
    <form action="/datapersebaran/update/{{$e->ID_persebaran}}" method="POST">
    {{csrf_field()}}
  <div class="form-group">
    <label for="Name">Kode persebaran</label>
    <input name="ID_persebaran" class="form-control" value="{{$e->ID_persebaran}}" >
  </div>
  <div class="form-group">
    <label for="Name">garis persebaran</label>
    <input name="garis_persebaran" class="form-control" value="{{$e->garis_persebaran}}" >
  </div>
  <div class="form-group">
    <label name="nama" for="Name">jenis hewan</label>
    <input name="jenis_hewan" class="form-control"  value="{{$e->jenis_hewan}}">
  </div>
  <div class="form-group">
    <label for="Name">meliputi provinsi</label>
    <input name="Meliputi_Provinsi" class="form-control" value="{{$e->Meliputi_Provinsi}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endforeach
</div>
  </div>
  <!-- /.content-wrapper -->
 @include('template.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

<!-- ./wrapper -->
@include('template.js')
</body>
</html>


