<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIJALAK | upload data wilayah</title>

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
    <h1 class="m-0 text-monospace">upload data wilayah </h1>
    <br class="mb-3">
    @foreach($editwilayah as $e)
    <form action="/datawilayah/update/{{$e->ID_wilayah}}" method="POST">
    {{csrf_field()}}
  <div class="form-group">
    <label for="Name">Kode wilayah</label>
    <input name="id_wilayah" class="form-control" value="{{$e->ID_wilayah}}" >
  </div>
  <div class="form-group">
    <label for="Name"> Nama wilayah</label>
    <input name="nama" class="form-control" value="{{$e->nama_wilayah}}" >
  </div>
  <div class="form-group">
    <label name="nama" for="Name">karakteristik wilayah</label>
    <input name="karakteristik" class="form-control" value="{{$e->Karakteristik_wilayah}}">
  </div>
  <div class="form-group">
    <label for="Name">ID Provinsi = {{$e->ID_provinsi}}</label>
    <select name="id_provinsi" class="form-control" id="exampleFormControlSelect1" name="id">
    @foreach ($provinsi as $p)
      <option name="id_provinsi" value="{{$p->ID_provinsi}}">{{$p->ID_provinsi}}->{{$p->nama}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="Name">ID fauna = {{$e->ID_fauna}}</label>
    <select name="id_fauna" class="form-control" id="exampleFormControlSelect1" name="id">
    @foreach ($editfauna as $q)
      <option name="id_provinsi" value="{{$q->ID_fauna}}">{{$q->ID_fauna}}->{{$q->nama_fauna}}</option>
      @endforeach
    </select>
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


