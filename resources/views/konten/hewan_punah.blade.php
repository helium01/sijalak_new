<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIJALAK | Data fauna</title>

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
  <h1 class="m-0">Data Fauna Punah</h1>
  <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Kode fauna punah</th>
      <th scope="col">Kode fauna</th>
      <th scope="col">nama Fauna</th>
      <th scope="col">endemik</th>
      <th scope="col">catatan kepunahan</th>
      <th scope="col">Pilih</th>
    </tr>
  </thead>
  <tbody>
  @foreach($hewan_punah as $h)
    <tr>
      <th scope="row">{{$h->ID_fauna_punah}}</th>
      <td>{{$h->ID_fauna}}</td>
      <td>{{$h->Nama}}</td>
      <td>{{$h->endemik}}</td>
      <td>{{$h->catatan_kaki}}</td>
      <td>
      
          <a class="btn btn-outline-primary" role="button" href="/fauna_punah/edit/{{$h->ID_fauna_punah}}"><i class="far fa-edit"> edit</i></a>
          <a class="btn btn-outline-danger" role="button" onclick="return ('yakin ingin menghapus data')" href="/fauna_punah/{{$h->ID_fauna_punah}}"><i class="fa fa-trash"> hapus</i></a>
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


