<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIJALAK | upload data fauna punah</title>

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
    <h1 class="m-0 text-monospace">edit data fauna punah</h1>
    <br class="mb-3">
    @foreach ($edithewan_punah as $h)
    <form action="/fauna_punah/update/{{$h->ID_fauna_punah}}" method="POST">
    {{csrf_field()}}
  <div class="form-group">
    <label for="Name">Kode fauna punah</label>
    <input name="id_fauna_punah" class="form-control" value="{{$h->ID_fauna_punah}}">
  </div>
  <div class="form-group">
    <label for="Name"> Kode fauna</label>
    <input name="id_fauna" class="form-control" value="{{$h->ID_fauna}}">
    <small id="emailHelp" class="form-text text-muted">samakan dengan id fauna punah</small>
  </div>
  <div class="form-group">
    <label name="nama" for="Name">Nama Fauna</label>
    <input name="nama" class="form-control" value="{{$h->Nama}}">
  </div>
  <div class="form-group">
    <label for="Name">Tempat Endemik</label>
    <input name="endemik" class="form-control" value="{{$h->endemik}}">
  </div>
  <div class="form-group">
    <label for="Name">Keterangan Punah</label>
    <textarea name="catatan_kaki" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$h->catatan_kaki}}</textarea>
    <small id="emailHelp" class="form-text text-muted">keterangan mengapa fauna ini punah</small>
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


