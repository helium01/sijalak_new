<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIJALAK | upload data fauna</title>

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
    <h1 class="m-0 text-monospace">upload data provinsi </h1>
    <br class="mb-3">
    @foreach ($editprovinsi as $p)
    <form action="/dataprofinsi/update/{{$p->ID_provinsi}}" method="POST">
    {{csrf_field()}}
  <div class="form-group">
    <label for="Name">Kode Provinsi</label>
    <input name="id_provinsi" class="form-control" value="{{$p->ID_provinsi}}" name=>update>
  </div>
  <div class="form-group">
    <label for="Name"> Nama Provinsi : {{$p->nama}}</label>
    <select class="form-control" name="nama" name=>update>

    </select>
  </div>
  <div class="form-group">
    <label name="nama" for="Name">koordinat</label>
    <input name="koordinat" class="form-control" value="{{$p->koordinat}}" name=>update>
    <small id="emailHelp" class="form-text text-muted">dapatkan di search google map</small>
  </div>
  <div class="form-group">
    <label for="Name">jenis hewan</label>
    <input name="jenis_hewan" class="form-control" value="{{$p->jenis_hewan}}" name=>update>
  </div>
  
  <input type="submit" class="btn btn-primary" value="submit">
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
@include('template.ayax')
</body>
</html>


