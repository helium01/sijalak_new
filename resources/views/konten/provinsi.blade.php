<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIJALAK | Data Provinsi</title>

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
  <div class="content-wrapper">
  <h1 class="m-0">Data provinsi</h1>
  <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Kode Provinsi</th>
      <th scope="col">nama </th>
      <th scope="col">koordinat</th>
      <th scope="col">jenis hewan</th>
      <th scope="col">pilihan</th>
    </tr>
  </thead>
  <tbody>
  @foreach($provinsi as $w)
    <tr>
      <th scope="row" name="id">{{$w->ID_provinsi}}</th>
      <td>{{$w->nama}}</td>
      <td>{{$w->koordinat}}</td>
      <td>{{$w->jenis_hewan}}</td>
      <td>
          <a  class="btn btn-outline-primary" role="button"  class="btn btn-outline-primary" role="button" href="/dataprofinsi/edit/{{$w->ID_provinsi}}"><i class="far fa-edit"></i></a>
            
          <a  class="btn btn-outline-danger" role="button"  class="btn btn-outline-danger" role="button" href="/dataprofinsi/{{$w->ID_provinsi}}" onclick="return confirm('yakin mau hapus datanya ')"><i class="fa fa-trash"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
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


