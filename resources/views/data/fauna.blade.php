<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIJALAK | upload data Fauna</title>

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
    <h1 class="m-0 text-monospace">upload data fauna </h1>
    <br class="mb-3">
    <form  action="{{route('upload_faunapost')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
  <div class="form-group">
    <label for="Name">Kode fauna</label>
    <input name="id_fauna" class="form-control" >
  </div>
  <div class="form-group">
    <label for="Name"> nama fauna</label>
    <input name="nama_fauna" class="form-control" >
    <small id="emailHelp" class="form-text text-muted">samakan dengan id fauna punah</small>
  </div>
  <div class="form-group">
    <label name="nama" for="Name">jenis Fauna</label>
    <input name="jenis_fauna" class="form-control" >
  </div>
  <div class="form-group">
    <label for="Name">Tempat Endemik</label>
    <input name="endemik" class="form-control" >
  </div>
  <div class="form-group">
    <label for="Name">jumlah populasi</label>
    <input name="jumlah_populasi" class="form-control" >
  </div>
  <div class="form-group">
    <label for="Name">Kode provinsi</label>
    <select class="form-control" id="exampleFormControlSelect1" name="id">
    @foreach ($provinsi as $p)
      <option name="id_provinsi" value="{{$p->ID_provinsi}}">{{$p->ID_provinsi}}->{{$p->nama}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="Name">Unggah Gambar</label>
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">gambar</span>
  </div>
  <div class="custom-file">
    <input name="foto"  id="gambar" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label name="foto"  class="custom-file-label a" for="inputGroupFile01">cari file di direktori anda</label>
  </div>
</div>
  </div>
  <div class="form-group">
    <label for="Name">Unggah Video</label>
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">video</span>
  </div>
  <div class="custom-file">
    <input id="video" name="video" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label name="video" class="custom-file-label b" for="inputGroupFile01">cari file di direktori anda</label>
  </div>
</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
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


