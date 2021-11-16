<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIJALAK | Data Wilayah</title>

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
  <h1 class="m-0">Data wilayah</h1>
  <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Kode wilayah</th>
      <th scope="col">nama_wilayah</th>
      <th scope="col">karakteristik wilayah</th>
      <th scope="col">Nama provinsi</th>
      <th scope="col">nama fauna</th>
      <th scope="col">Pilih</th>
    </tr>
  </thead>
  <tbody>
  @foreach($wilayah as $w)
    <tr>
      <th scope="row">{{$w->ID_wilayah}}</th>
      <td>{{$w->nama_wilayah}}</td>
      <td>{{$w->Karakteristik_wilayah}}</td>
      <td>{{$w->nama}}</td>
      <td>{{$w->nama_fauna}}</td>
      <td>
          <a  class="btn btn-outline-primary" role="button" href="/datawilayah/edit/{{$w->ID_wilayah}}"><i class="fas fa-edit"></i></a>
            
          <a  class="btn btn-outline-danger" role="button" href="/datawilayah/{{$w->ID_wilayah}}" onclick="return confirm('yakin mau hapus datanya ')"><i class="fa fa-trash"></i></a>
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


