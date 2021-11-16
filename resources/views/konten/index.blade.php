
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIJALAK | Dashboard</title>

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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$user}}</h3>

                <p>Jumlah Fauna Terdaftar</p>
              </div>
              <div class="icon">
              <i class="fas fa-paw"></i>
              </div>
              <a href="{{route('hewan')}}" class="small-box-footer">Info lengkap <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$punah}}</h3>

                <p>Fauna Punah</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{route('fauna_punah')}}" class="small-box-footer">info lengkap <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$provinsi}}</h3>

                <p>provinsi terdaftar</p>
              </div>
              <div class="icon">
              <i class="fab fa-accusoft"></i>
              </div>
              <a href="{{route('provinsi')}}" class="small-box-footer">Info Lengkap <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$wilayah}}</h3>

                <p>jumlah wilayah yang terdaftar</p>
              </div>
              <div class="icon">
              <i class="fas fa-air-freshener"></i>
              </div>
              <a href="{{route('wilayah')}}" class="small-box-footer">Info Lengkap<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="card bg-gradient-success">
              <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                      <i class="fas fa-bars"></i>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days"><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">April 2021</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="03/28/2021" class="day old weekend">28</td><td data-action="selectDay" data-day="03/29/2021" class="day old">29</td><td data-action="selectDay" data-day="03/30/2021" class="day old">30</td><td data-action="selectDay" data-day="03/31/2021" class="day old">31</td><td data-action="selectDay" data-day="04/01/2021" class="day">1</td><td data-action="selectDay" data-day="04/02/2021" class="day">2</td><td data-action="selectDay" data-day="04/03/2021" class="day weekend">3</td></tr><tr><td data-action="selectDay" data-day="04/04/2021" class="day weekend">4</td><td data-action="selectDay" data-day="04/05/2021" class="day">5</td><td data-action="selectDay" data-day="04/06/2021" class="day">6</td><td data-action="selectDay" data-day="04/07/2021" class="day">7</td><td data-action="selectDay" data-day="04/08/2021" class="day">8</td><td data-action="selectDay" data-day="04/09/2021" class="day">9</td><td data-action="selectDay" data-day="04/10/2021" class="day weekend">10</td></tr><tr><td data-action="selectDay" data-day="04/11/2021" class="day weekend">11</td><td data-action="selectDay" data-day="04/12/2021" class="day">12</td><td data-action="selectDay" data-day="04/13/2021" class="day">13</td><td data-action="selectDay" data-day="04/14/2021" class="day">14</td><td data-action="selectDay" data-day="04/15/2021" class="day">15</td><td data-action="selectDay" data-day="04/16/2021" class="day">16</td><td data-action="selectDay" data-day="04/17/2021" class="day weekend">17</td></tr><tr><td data-action="selectDay" data-day="04/18/2021" class="day weekend">18</td><td data-action="selectDay" data-day="04/19/2021" class="day">19</td><td data-action="selectDay" data-day="04/20/2021" class="day">20</td><td data-action="selectDay" data-day="04/21/2021" class="day active today">21</td><td data-action="selectDay" data-day="04/22/2021" class="day">22</td><td data-action="selectDay" data-day="04/23/2021" class="day">23</td><td data-action="selectDay" data-day="04/24/2021" class="day weekend">24</td></tr><tr><td data-action="selectDay" data-day="04/25/2021" class="day weekend">25</td><td data-action="selectDay" data-day="04/26/2021" class="day">26</td><td data-action="selectDay" data-day="04/27/2021" class="day">27</td><td data-action="selectDay" data-day="04/28/2021" class="day">28</td><td data-action="selectDay" data-day="04/29/2021" class="day">29</td><td data-action="selectDay" data-day="04/30/2021" class="day">30</td><td data-action="selectDay" data-day="05/01/2021" class="day new weekend">1</td></tr><tr><td data-action="selectDay" data-day="05/02/2021" class="day new weekend">2</td><td data-action="selectDay" data-day="05/03/2021" class="day new">3</td><td data-action="selectDay" data-day="05/04/2021" class="day new">4</td><td data-action="selectDay" data-day="05/05/2021" class="day new">5</td><td data-action="selectDay" data-day="05/06/2021" class="day new">6</td><td data-action="selectDay" data-day="05/07/2021" class="day new">7</td><td data-action="selectDay" data-day="05/08/2021" class="day new weekend">8</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2021</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month active">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year active">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade active" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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
