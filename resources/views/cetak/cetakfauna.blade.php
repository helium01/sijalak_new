
  <!-- Content Wrapper. Contains page content -->
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- favicon -->
  <link rel="shortcut icon" href="{{asset('admin')}}/favicon.ico" >
  <link rel="icon" href="{{asset('admin')}}/favicon.ico" >
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('admin')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('admin')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('admin')}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin')}}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('admin')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('admin')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('admin')}}/plugins/summernote/summernote-bs4.min.css">

  </head>
  <body>
   <center>
 <h1 class="m-0">Data Fauna</h1>
 </center>
  <br>
  <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Kode fauna</th>
      <th scope="col">Nama Fauna</th>
      <th scope="col">jenis Fauna</th>
      <th scope="col">endemik</th>
      <th scope="col">jumlah populasi</th>
      <th scope="col">nama provinsi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($hewan as $h)
    <tr>
      <th scope="row">{{$h->ID_fauna}}</th>
      <td>{{$h->nama_fauna}}</td>
      <td>{{$h->jenis_fauna}}</td>
      <td>{{$h->endemikdi}}</td>
      <td>{{$h->jumlah_populasi}}</td>
      <td>{{$h->nama}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
  </div> 
  </body>
 




