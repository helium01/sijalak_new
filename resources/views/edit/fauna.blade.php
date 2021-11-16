<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIJALAK | upload data provinsi</title>

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
    @foreach($editfauna as $e)
    <form action="/datahewan/update/{{$e->ID_fauna}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
  <div class="form-group">
    <label for="Name">Kode fauna</label>
    <input name="id_fauna" class="form-control" value="{{$e->ID_fauna}}">
  </div>
  <div class="form-group">
    <label for="Name"> nama fauna</label>
    <input name="nama_fauna" class="form-control" value="{{$e->nama_fauna}}">
    <small id="emailHelp" class="form-text text-muted">samakan dengan id fauna punah</small>
  </div>
  <div class="form-group">
    <label name="nama" for="Name">jenis Fauna</label>
    <input name="jenis_fauna" class="form-control"  value="{{$e->jenis_fauna}}">
  </div>
  <div class="form-group">
    <label for="Name">Tempat Endemik</label>
    <input name="endemik" class="form-control"  value="{{$e->endemikdi}}" >
  </div>
  <div class="form-group">
    <label for="Name">jumlah populasi</label>
    <input name="jumlah_populasi" class="form-control"  value="{{$e->jumlah_populasi}}" >
  </div>
  <div class="form-group">
    <label for="Name">ID provinsi= {{$e->ID_provinsi}}</label>
    <select  class="form-control" id="exampleFormControlSelect1" name="id">
    @foreach ($provinsi as $p)
      <option name="id_provinsi" value="{{$p->ID_provinsi}}">{{$p->ID_provinsi}}->{{$p->nama}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="Name">Unggah Gambar pembaruan</label>
    <div class="row ml-2 mb-2">
    <a href="{{asset('img/'.$e->foto)}}" target="_blank"><img class="img-thumbnail" src="{{asset('img/'.$e->foto)}}" width="80" height="80" alt="foto fauna {{$e->nama_fauna}}">
    </div>
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">gambar</span>
  </div>
  <div class="custom-file">
  <input name="foto" value="{{$e->foto}}"  id="gambar" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label name="foto"  class="custom-file-label a" for="inputGroupFile01">cari file di direktori anda</label>
  </div>
</div>
  </div>
  <div class="form-group">
    <label for="Name">Unggah Video</label>
    <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="{{asset('vid/'.$e->video)}}"></iframe>
</div>
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">video</span>
  </div>
  <div class="custom-file">
  <input id="video" value="{{$e->video}}" name="video" type="file" type="text" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label name="video" class="custom-file-label b" for="inputGroupFile01">cari file di direktori anda</label>
  </div>
</div>
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
@include('template.ayax')
</body>
</html>


