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
  <h1 class="m-0">Data Fauna</h1>
  <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Kode fauna</th>
      <th scope="col">Nama Fauna</th>
      <th scope="col">jenis Fauna</th>
      <th scope="col">endemik</th>
      <th scope="col">jumlah populasi</th>
      <th scope="col">Kode provinsi</th>
      <th scope="col">foto</th>
      <th scope="col">Video</th>
      <th scope="col">dibuat tanggal</th>
      <th scope="col">di update tanggal</th>
      <th scope="col">opsi</th>
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
      <td><a href="{{asset('img/'.$h->foto)}}" target="_blank"><img src="{{asset('img/'.$h->foto)}}" width="40" height="40" alt="foto fauna {{$h->nama_fauna}}"></a></td>
      <td><video controls>
    <source src="{{asset('vid/'.$h->video)}}" type="video/png" />
    Browsermu tidak mendukung tag ini, upgrade donk!
  </video></td>
      <td>{{$h->created_at}}</td>
      <td>{{$h->updated_at}}</td>
      <td>
          <a class="btn btn-outline-primary" role="button" href="/datahewan/edit/{{$h->ID_fauna}}"><i class="far fa-edit">edit</i></a>
            
          <a class="btn btn-outline-danger" role="button" href="/datahewan/{{$h->ID_fauna}}" onclick="return confirm('yakin mau hapus datanya ')"><i class="fa fa-trash ">hapus</i></a>
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


