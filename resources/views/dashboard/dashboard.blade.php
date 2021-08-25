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
<div class="card">
    <div class="card-body">
    <div class="form-group">
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
    </div>

    <!-- Small boxes (Start box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>Rp {{number_format($mean,2,',',".")}}</h3>
                    <p>Rata-rata Transaksi</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$count}}</h3>
                    <p>Penjualan</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- AREA CHART -->
    <div class="card-body">
        <div class="chart">
            <canvas id="areaChart"
                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
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
    $(function () {
        var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
        var areaChartData = {
            // labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus','September','Oktober', 'November', 'Desember'],
            labels: [
                <?php foreach ($chart_data as $cd):
                    $bln = explode('-', $cd['y']);
                    if($bln[1] == 1) { ?>
                        '<?php echo "Januari";?>' <?php
                    } else if($bln[1] == 2) { ?>
                        '<?php echo "Februari";?>' <?php
                    } else if($bln[1] == 3) { ?>
                        '<?php echo "Maret";?>' <?php
                    } else if($bln[1] == 4) { ?>
                        '<?php echo "April";?>' <?php
                    } else if($bln[1] == 5) { ?>
                        '<?php echo "Mei";?>' <?php
                    } else if($bln[1] == 6) { ?>
                        '<?php echo "Juni";?>' <?php
                    } else if($bln[1] == 7) { ?>
                        '<?php echo "Juli";?>' <?php
                    } else if($bln[1] == 8) { ?>
                        '<?php echo "Agustus";?>' <?php
                    } else if($bln[1] == 9) { ?>
                        '<?php echo "September";?>' <?php
                    } else if($bln[1] == 10) { ?>
                        '<?php echo "Oktober";?>' <?php
                    } else if($bln[1] == 11) { ?>
                        '<?php echo "November";?>' <?php
                    } else if($bln[1] == 12) { ?>
                        '<?php echo "Desember";?>' <?php
                    } ?>,
                <?php endforeach ?>
            ],
            datasets: [
                {
                    label: 'Total Penjualan',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    // data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, {{$count}}]
                    data: [
                        <?php foreach ($chart_data as $cd): ?>
                            <?php echo $cd['a']?>,
                        <?php endforeach ?>
                    ],
                },
            ]
        }

        var areaChartOptions = {
            maintainAspectRatio: false,
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
            }
        }

        var areaChart = new Chart(areaChartCanvas, {
            type: 'bar',
            data: areaChartData,
            options: areaChartOptions
        })
    })
</script>
@endsection
