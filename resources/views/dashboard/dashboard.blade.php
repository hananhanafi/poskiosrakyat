@extends('layout.main')
@section('dashboard_aktif', 'active')

@section('navigation')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Beranda</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
</div>
@stop

@section('css')
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{url('adminlte/plugins/daterangepicker/daterangepicker.css')}}">
@endsection

@section('title')
<h1>Dashboard</h1>
@stop
@section('content')
@if ($alert = Session::get('alert-success'))
    <div class="alert alert-success">
        {{ $alert }}
    </div>
@endif

<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-hand-holding-usd"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Penjualan</span>
            <span class="info-box-number">
                Rp {{$sales}}
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
    <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-shopping-cart text-white"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Pembelian</span>
            <span class="info-box-number">
                Rp 6.000.000
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
    <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-hand-holding-heart"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Produk</span>
            <span class="info-box-number">{{$products_count}} Item</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user-friends"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Operator Kasir</span>
            <span class="info-box-number">{{$operators_count > 0 ? $operators_count.' Orang' : '-' }}</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    <!-- /.info-box -->
    </div>
    <!-- /.col -->
</div>
<div class="card">
    <div class="card-body">
    <!-- <div class="form-group">
        <form action="" method="get" id="form_filter" autocomplete="off">
        <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="far fa-calendar-alt"></i>
              </span>
            </div>
            <input type="text" class="form-control float-right" name="range" value="<?=@$_GET['range']?>" id="range_filter">
            <button type="submit" class="btn btn-success btn-sm">Filter</button>
        </div>
        </form>
    </div> -->

    <!-- Small boxes (Start box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <!-- <div class="small-box bg-info">
                <div class="inner">
                    <h3>Rp {{number_format($mean,2,',',".")}}</h3>
                    <p>Rata-rata Transaksi</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
            </div> -->
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <!-- <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$count}}</h3>
                    <p>Penjualan</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
            </div> -->
        </div>
    </div>
    <!-- AREA CHART -->
    <div class="card-body">
        <div class="chart">
            <canvas id="areaChart"
                style="min-height: 400px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
        </div>
    </div>
    <!-- /.card -->
    </div>

</div>

@endsection
@section('js')
<script src="{{url('adminlte/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{url('adminlte/plugins/moment/moment.min.js')}}"></script>
<script src="{{url('adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script>
    $(function() {

        $('input[name="range"]').daterangepicker({
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            }
        });

        $('input[name="range"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
        });

        $('input[name="range"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });

    });

    // $('.applyBtn').click(function() {
    //     $('#form_filter').attr('action', 'dashboard').submit();
    // })
</script>
<script>
    $( document ).ready(function() {
        
        const months_name = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus','September','Oktober', 'November', 'Desember'];
        var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
        var areaChartData = {
            labels: months_name,
            datasets: [
                {
                    label: 'Tahun Ini',
                    backgroundColor: '#007BFF',
                    borderColor: '#007BFF',
                    // pointRadius: false,
                    // pointColor: '#3b8bba',
                    // pointStrokeColor: 'rgba(60,141,188,1)',
                    // pointHighlightFill: '#fff',
                    // pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                    // data: [
                    //     <?php for ($i=0;$i<12;$i++): ?>
                    //     <?php endfor ?>
                    // ]
                },
                {
                    label: 'Tahun Lalu',
                    backgroundColor: '#CED4DA',
                    borderColor: '#CED4DA',
                    // pointRadius: false,
                    // pointColor: '#3b8bba',
                    // pointStrokeColor: 'rgba(60,141,188,1)',
                    // pointHighlightFill: '#fff',
                    // pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                },
            ]
        }

        var areaChartOptions = {
            maintainAspectRatio: false,
            // aspectRatio: 10,
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                        display: true,
                        gridLines: {
                            display: false,
                        }
                    }],
                yAxes: [{
                        display: true,
                        ticks: {
                            beginAtZero: true,
                            max: 20
                        },
                        gridLines: {
                            display: false,
                        },
                }]
            },
            legend: {
                display: true,
                labels: {
                    color: 'rgb(255, 99, 132)',
                    boxWidth: 14,
                    // boxHeight: 40
                },
                position: 'bottom',
            }
        }

        var areaChart = new Chart(areaChartCanvas, {
            type: 'bar',
            data: areaChartData,
            options: areaChartOptions
        })
        // updateChart()
        
        const currentYear = new Date().getFullYear();
        var chartData = [<?php foreach ($chart_data as $cd): ?>
                            <?php echo json_encode($cd)?>,
                        <?php endforeach ?>]
        chartData.forEach(data=> {
            var indexChartData,indexDataSet

            dateSplit = data.date.split('-');
            if(dateSplit[1]<10){
                indexChartData = dateSplit[1][1]-1
            }else{
                indexChartData = dateSplit[1]-1
            }
            if(dateSplit[0]<currentYear){
                indexDataSet = 1;
            }else {
                indexDataSet = 0;
            }
            console.log("indexDataSet",indexDataSet)
            console.log("indexChartData",indexChartData)
            // console.log("areach",areaChart.data)
            areaChartData.datasets[indexDataSet].data[indexChartData] = data.amount;
            
        })
        areaChart.update();

    });
</script>
@endsection
