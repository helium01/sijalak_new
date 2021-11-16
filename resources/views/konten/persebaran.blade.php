<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIJALAK | Data Persebaran</title>

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
  <h1 class="m-0">Data persebaran</h1>
  <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Kode persebaran</th>
      <th scope="col">garis persebaran</th>
      <th scope="col">jenis hewan</th>
      <th scope="col">meliputi provinsi</th>
      <th scope="col">Pilihan</th>
    </tr>
  </thead>
  <tbody>
  @foreach($persebaran as $h)
    <tr>
      <th scope="row">{{$h->ID_persebaran}}</th>
      <td>{{$h->garis_persebaran}}</td>
      <td>{{$h->jenis_hewan}}</td>
      <td>{{$h->Meliputi_Provinsi}}</td>
      <td>
          <a  class="btn btn-outline-primary" role="button" href="/datapersebaran/edit/{{$h->ID_persebaran}}"><i class="far fa-edit"></i></a>
          
          <a  class="btn btn-outline-danger" role="button" href="/datapersebaran/{{$h->ID_persebaran}}" onclick="return confirm('yakin mau hapus datanya ')"><i class="fa fa-trash"></i></a>
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


