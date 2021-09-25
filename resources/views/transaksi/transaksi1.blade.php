@extends('layout.main')
@section('transaction_aktif', 'active')
<link rel="stylesheet" type="text/css" href="{{asset('jqueryui/jquery-ui.min.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('navigation')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Beranda</a></li>
        <li class="breadcrumb-item active">Transaksi</li>
    </ol>
</div>
@stop

@section('title')
<h1>Transaksi</h1>
@stop
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <!-- Horizontal Form -->
                <div class="card card-light">
                    <!-- form start -->
                    <div class="card-header">
                        <h4><b>Pencarian Barang</b></h4>
                    </div>
                    <form class="form-horizontal" method="POST" action="{{ url('/insert_cart') }}">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 fas fa-barcode">
                                    <div class="form-group row">
                                        <label for="namabarang" class="col-sm-6 col-form-label">Kode/Nama Barang</label>
                                        <div class="col-sm-6">
                                            <input type="hidden" class="form-control" name="idretailerproduk"
                                                id="idretailerproduk">
                                            <input type="hidden" class="form-control" name="kode_produk"
                                                id="kode_produk">
                                            <input type="text" class="form-control" name="namabarang" id="namabarang"
                                                autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="hargajual" class="col-sm-6 col-form-label">Harga Jual</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="hargajual" id="hargajual" readonly>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label for="foto" class="col-sm-6 col-form-label">Foto Produk</label>
                                        <div class="col-sm-6">
                                            {{-- <input type="text" class="form-control" name="foto" id="foto"> --}}
                                            <img src="" id="foto" style="width: 150px;">
                                        </div>
                                    </div> -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="hargadiskon" class="col-sm-6 col-form-label">Harga Setelah Diskon</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="hargadiskon" id="hargadiskon" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah" class="col-sm-6 col-form-label">Jumlah</label>
                                        <div class="col-sm-6">
                                            <input type="number"  min='1' class="form-control" name="jumlah" id="jumlah">
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label for="deskripsiproduk" class="col-sm-6 col-form-label">Deskripsi Produk</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="deskripsiproduk" id="deskripsiproduk">
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="card-footer" style="background-color: #fff">
                            <button type="button" id="addcart" class="btn btn-sm btn-info float-right">[F9] -
                                Tambah</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <!-- form start -->
                            <div class="card-body">
                                <Center><label style="font-size: 40px" id="totalakhir2">Rp 0</label></Center>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class="col-md-12">
                        <!-- Horizontal Form -->
                        <div class="card card-info">
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="tanggal" class="col-sm-4 col-form-label">Tanggal</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="tanggal" readonly
                                            value="{{$tanggal}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tanggal" class="col-sm-4 col-form-label">Waktu</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="waktu" readonly
                                            value="{{date('H:i:s')}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kasir" class="col-sm-4 col-form-label">Kasir</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="kasir" readonly value="{{$kasir}}">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card card-info">
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="card-body">
                            <table id="cartTable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Harga (Rp)</th>
                                        <th>Jumlah</th>
                                        <th>Total (Rp)</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                </tfoot>
                            </table>
                        </div>
                    </form>
                </div>
            </div>

            <form action="{{route('transaksi.bayar')}}" style="width: 100%;display: flex;" method="POST">
                @csrf
                <div class="col-md-5">
                    <!-- Horizontal Form -->
                    <div class="card card-info">
                        <!-- form start -->
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label">Sub Total</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="subtotal" id="subtotal" readonly placeholder="0">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label">Diskon</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control masking2" name="diskon" id="diskon" placeholder="0">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label">TOTAL AKHIR</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="totalakhir" id="totalakhir" readonly placeholder="0">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

                <div class="col-md-4">
                    <!-- Horizontal Form -->
                    <div class="card card-info">
                        <!-- form start -->
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label">Tunai</label>
                                <div class="col-sm-8">
                                    <input type="text" class="masking2 form-control" name="tunai" id="tunai" placeholder="0">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label">Kembali</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="kembalian" id="kembalian" readonly placeholder="0">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

                <div class="col-md-3">
                    <div class="col-md-6">
                        <a type="button" class="btn btn-block bg-gradient-warning btn-flat" href="{{url('/batal')}}"
                            id="batal">[F5] - Batal</a>
                        <br>
                    </div>
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-block bg-gradient-success btn-flat"
                            id="bayar">[Enter] - Proses Bayar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</section>
@endsection
@section('js')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('js/jquery.mask.min.js')}}"></script>
<script src="{{asset('js/jquery.mask.js')}}"></script>
<script src="{{asset('jqueryui/jquery-ui.min.js')}}" type="text/javascript"></script>

<!-- Button Tambah -->
<script>
    var input = document.getElementById("jumlah");
    input.addEventListener("keyup", function (event) {
        if (event.keyCode === 120) {
            event.preventDefault();
            document.getElementById("addcart").click();
        }
    });

</script>

<!-- Button Batal -->
<script>
    document.addEventListener("keyup", function (event) {
        if (event.keyCode === 116) {
            event.preventDefault();
            document.getElementById("batal").click();
        }
    });
</script>

<!-- Button Bayar -->
<script>
    var input = document.getElementById("tunai");
    input.addEventListener("keyup", function (event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            document.getElementById("bayar").click();
        }
    });

    // $('#bayar').click(function() {
    //     window.open('{{ url("transaksi/") }}', '_blank');
    // });
</script>

<script type="text/javascript">
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function () {

        $("#namabarang").autocomplete({
            source: function (request, response) {
                // Fetch data
                $.ajax({
                    url: "/cari",
                    type: 'post',
                    dataType: "json",
                    data: {
                        _token: CSRF_TOKEN,
                        search: request.term
                    },
                    success: function (data) {
                        response(data);
                    }
                });
            },
            select: function (event, ui) {
                // Set selection
                $('#namabarang').val(ui.item.label); // display the selected text
                $('#hargajual').val(ui.item.price); // save selected id to input
                $('#deskripsiproduk').val(ui.item.deskripsi_produk); // save selected id to input
                $('#hargadiskon').val(ui.item.diskon); // save selected id to input
                $('#idretailerproduk').val(ui.item.idretailerproduk); // save selected id to input
                $('#kode_produk').val(ui.item.kode_produk); // save selected id to input
                $('#foto').attr('src', ui.item.foto); // save selected id to input
                document.getElementById('jumlah').focus();
                return false;
            }
        });
    });

    $(document).ready(function () {

        fetchRecords();

        $('#addcart').click(function () {

            var idretailerproduk = $('#idretailerproduk').val();
            var kode_produk = $('#kode_produk').val();
            var namabarang = $('#namabarang').val();
            var hargajual = $('#hargajual').val();
            var deskripsiproduk = $('#deskripsiproduk').val();
            var hargadiskon = $('#hargadiskon').val();
            var hargabarang = hargadiskon ? hargadiskon : hargajual;
            var jumlah = $('#jumlah').val();
            var foto = $('#foto').val();

            if (idretailerproduk != '' && jumlah != '') {
                $.ajax({
                    url: '/addCart',
                    type: 'post',
                    data: {
                        _token: CSRF_TOKEN,
                        idretailerproduk: idretailerproduk,
                        kode_produk: kode_produk,
                        namabarang: namabarang,
                        hargajual: hargajual,
                        deskripsiproduk : deskripsiproduk,
                        hargadiskon: hargadiskon,
                        jumlah: jumlah,
                        hargabarang: hargabarang,
                        foto: foto
                    },
                    success: function (response) {

                        if (response > 0) {
                            var id = response;
                            var findnorecord = $('#cartTable tr.norecord').length;

                            if (findnorecord > 0) {
                                $('#cartTable tr.norecord').remove();
                            }
                            var tr_str = "<tr>" +
                                "<td>" + kode_produk + "</td>" +
                                "<td>" + namabarang + "</td>" +
                                "<td align='center'>" + (hargabarang / 1000).toFixed(3) +
                                "</td>" +
                                "<td align='center'><input type='text' value='" + jumlah +
                                "' id='jumlah_" + id + "'></td>" +
                                "<td align='center'>" + ((jumlah * hargabarang) / 1000)
                                .toFixed(3) + "</td>" +
                                "<td align='center'><a class='btn btn-outline-warning btn-sm update' data-id='" + id +
                                "' data-toggle='modal' data-target='#editModal'><i class='fas fa-pencil-alt'></i></a><button type='button' class='btn btn-outline-danger btn-sm delete' data-toggle='modal' data-target='#modal-hapus' data-id='" +
                                id + "'><i class='fa fa-trash'></i></button></td>" +
                                "</tr>";

                            $("#cartTable tbody").append(tr_str);
                            fetchRecords();
                        } else if (response == 0) {
                            alert('Barang sudah ditambahkan')
                            document.getElementById('namabarang').focus();
                        } else {
                            alert(response);
                        }

                        // Empty the input fields
                        $('#namabarang').val('');
                        $('#hargajual').val('');
                        $('#deskripsiproduk').val('');
                        $('#hargadiskon').val('');
                        $('#jumlah').val('');
                        $('#foto').val('');
                        document.getElementById('namabarang').focus();
                    }
                });
            } else {
                alert('Inputan tidak boleh kosong!');
                document.getElementById('namabarang').focus();
            }
        });

        // Fetch records
        function fetchRecords() {
            $.ajax({
                url: '/getCart',
                type: 'get',
                dataType: 'json',
                success: function (response) {
                    console.log(response);
                    var len = 0;
                    $('#cartTable tbody').empty(); // Empty <tbody>
                    if (response['data'] != null) {
                        len = response['data'].length;
                    }

                    if (len > 0) {
                        var subtotal = 0;
                        var totalakhir = 0;

                        for (var i = 0; i < len; i++) {
                            var id = response['data'][i].id_pos_cart_detail;
                            var idretailerproduk = response['data'][i].id_retailer_produk;
                            var kode_produk = response['data'][i].kode_produk;
                            var namabarang = response['data'][i].nama;
                            var hargajual = response['data'][i].harga_jual;
                            var deskripsiproduk = response['data'][i].deskripsi_produk;
                            var hargadiskon = response['data'][i].harga_diskon;
                            var hargabarang = hargadiskon ? hargadiskon : hargajual;
                            var jumlah = response['data'][i].jumlah;
                            var foto = response['data'][i].foto;
                            var total = hargabarang * response['data'][i].jumlah;
                            subtotal += hargabarang * jumlah;
                            totalakhir += total;


                            var tr_str = "<tr>" +
                                "<td>" + kode_produk + "</td>" +
                                "<td>" + namabarang + "</td>" +
                                "<td align='center' id='hargabarang_" + id + "' class='uang'>" + (hargabarang / 1000).toFixed(3) + "</td>" +
                                "<td align='center'><input type='text' value='" + jumlah + "' id='jumlah_" + id + "'></td>" +
                                "<td align='center' id='total_" + id + "'>" + (total / 1000).toFixed(3) + "</td>" +
                                "<td align='center'><a class='btn btn-outline-warning btn-sm update' data-id='" + id +
                                "' data-toggle='modal' data-target='#editModal'><i class='fas fa-pencil-alt'></i></a><button type='button' class='btn btn-outline-danger btn-sm delete' data-toggle='modal' data-target='#modal-hapus' data-id='" +
                                id + "'><i class='fa fa-trash'></i></button></td>" +
                                "</tr>";

                            $("#cartTable tbody").append(tr_str);
                            $("#subtotal").val('Rp ' + (subtotal / 1000).toFixed(3));
                            $("#totalakhir").val('Rp ' + (totalakhir / 1000).toFixed(3));
                            $("#totalakhir2").html('Rp ' + (totalakhir / 1000).toFixed(3));

                        }
                    } else {
                        var tr_str = "<tr class='norecord'>" +
                            "<td align='center' colspan='6'>Data tidak ditemukan</td>" +
                            "</tr>";

                        $("#cartTable tbody").append(tr_str);
                    }

                }
            });

        };

        //Update Cart
        $(document).on("click", ".update", function () {
            var edit_id = $(this).data('id');
            var jumlah = $('#jumlah_' + edit_id).val();

            if (jumlah != '' && jumlah > 0) {
                $.ajax({
                    url: '/updateCart',
                    type: 'post',
                    data: {
                        _token: CSRF_TOKEN,
                        editid: edit_id,
                        jumlah: jumlah
                    },
                    success: function (response) {
                        fetchRecords();
                        alert(response);
                    }
                });
            } else {
                alert('Jumlah tidak boleh kosong.');
            }
        });

        // Delete record
        $(document).on("click", ".delete", function () {
            var delete_id = $(this).data('id');
            var el = this;
            $.ajax({
                url: 'deleteCart/' + delete_id,
                type: 'get',
                success: function (response) {
                    $(el).closest("tr").remove();
                    fetchRecords();
                    alert(response);
                }
            });
        });

        $(document).on('click', '.btnBayar', function (e) {
            var total = row.find("td:eq(1)").text();
            var tunai = row.find("td:eq(1)").text();
            var kembali = row.find("td:eq(2)").text();

            $('#nameEdit').val(name);
            $('#emailEdit').val(email);
        });

        $('#diskon').change(function () {
            var diskon = $('#diskon').val();
            var subtotal = $('#subtotal').val().split('Rp ');

            // console.log(diskon, subtotal);
            // $('#totalakhir').val('Rp ' + (subtotal[1] - (diskon / 1000)).toFixed(3));
            // $("#totalakhir2").html('Rp ' + (subtotal[1] - (diskon / 1000)).toFixed(3));

            var sub = subtotal[1]
            console.log(diskon, sub.replace('.', ''));
            $('#totalakhir').val('Rp ' + ((parseInt(sub.replace('.', '')) - (parseInt(diskon.replace('.', '')))) / 1000).toFixed(3));
            $("#totalakhir2").html('Rp ' + ((parseInt(sub.replace('.', '')) - (parseInt(diskon.replace('.', '')))) / 1000).toFixed(3));

            var tunai = $('#tunai').val();
            var kembalian = $('#kembalian').val();
            var totalakhir = $('#totalakhir').val().split('Rp ');

            console.log(tunai, totalakhir);
            if (tunai > 0) {
                $('#kembalian').val((tunai - totalakhir[1]).toFixed(3));
            }
        });

        $('#tunai').change(function () {
            var tunai = $('#tunai').val();
            var kembalian = $('#kembalian').val();
            var totalakhir = $('#totalakhir').val().split('Rp ');

            console.log(tunai, totalakhir);
            $('#kembalian').val((tunai - totalakhir[1]).toFixed(3));
        });

        $(document).ready(function () {
            $('.masking1').mask('#.##0', {
                reverse: true
            });
            $('.masking2').mask('#.##0', {
                reverse: true
            });
            $('.masking3').mask('###,##0', {
                reverse: true
            });
        })

    });

</script>
@endsection
