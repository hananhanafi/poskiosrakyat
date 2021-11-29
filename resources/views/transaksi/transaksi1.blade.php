@extends('layout.main')
@section('transaction_menu_open', 'menu-is-opening menu-open')
@section('transaction_aktif', 'active')
@section('penjualan_aktif', 'active')
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
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="card">
                    <!-- form start -->
                    <div class="card-header text-lg py-4">
                        <h4><b>Pencarian Barang</b></h4>
                    </div>
                    <form class="form-horizontal mb-0" method="POST" action="{{ url('/insert_cart') }}">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label for="namabarang" class="colcol-form-label">Kode/Nama Barang</label>
                                        <div class="col">
                                            <input type="hidden" class="form-control" name="idretailerproduk"
                                                id="idretailerproduk">
                                            <input type="hidden" class="form-control" name="kode_produk"
                                                id="kode_produk">
                                            <input type="text" class="form-control" name="namabarang" id="namabarang"
                                                autofocus>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label for="hargajual" class="col-sm-6 col-form-label">Harga Jual</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="hargajual" id="hargajual" readonly>
                                        </div>
                                    </div> -->
                                    <!-- <div class="form-group row">
                                        <label for="foto" class="col-sm-6 col-form-label">Foto Produk</label>
                                        <div class="col-sm-6">
                                            {{-- <input type="text" class="form-control" name="foto" id="foto"> --}}
                                            <img src="" id="foto" style="width: 150px;">
                                        </div>
                                    </div> -->
                                </div>
                                <div class="col-md-5">
                                    <!-- <div class="form-group row">
                                        <label for="hargadiskon" class="col-sm-6 col-form-label">Harga Setelah Diskon</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="hargadiskon" id="hargadiskon" readonly>
                                        </div>
                                    </div> -->
                                    <div class="form-group row">
                                        <label for="jumlah" class="pl-4 col-form-label text-right">Jumlah Beli</label>
                                        <div class="col-2">
                                            <input type="number"  min='1' class="form-control" name="jumlah" id="jumlah">
                                        </div>
                                        <div class="col-4">
                                            <button type="button" id="addcart" class="btn  btn-brand-secondary btn-sm bg-brand-secondary text-white rounded-8 no-shadow float-right"><i class="fas fa-plus"></i> Tambah (F9)</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="card-footer" style="background-color: #fff">
                            <button type="button" id="addcart" class="btn btn-sm btn-info float-right">Tambah (F9)</button>
                        </div> -->
                    </form>
                </div>
                <!-- /.card -->
            </div>

            <div class="col-md-12">
                <div class="card card-info">
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="card-header text-lg py-4">
                            <h4><b>Hasil Pencarian</b></h4>
                        </div>
                        <div class="card-body">
                            <div class="" style="overflow-x:auto">
                                <table id="cartTable" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Total</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                            </div>
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
                            <!-- <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label">TOTAL AKHIR</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="totalakhir" id="totalakhir" readonly placeholder="0">
                                </div>
                            </div> -->
                        </div>
                        
                        <div class="card-footer" style="background-color: #fff;border-top: 1px solid rgba(0,0,0,.125);">
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

                <div class="col-md-7">
                    <!-- Horizontal Form -->
                    <div class="card">
                        <!-- form start -->
                        <div class="card-header text-lg py-4">
                            <h4><b>Pembayaran</b></h4>
                        </div>  
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Tunai</label>
                                <div class="col-sm-6">
                                    <input type="text" class="masking2 form-control" name="tunai" id="tunai" placeholder="0">
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn  btn-brand-secondary btn-sm bg-brand-secondary text-white rounded-8 no-shadow w-100"     
                                            id="bayar">Proses Bayar (Enter)</button>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Kembali</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="kembalian" id="kembalian" readonly placeholder="0">
                                </div>
                                <div class="col">
                                    <a type="button" class="btn btn-outline-danger rounded-8 w-100" href="{{url('/batal')}}"
                                        id="batal">Batal (F5)</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

                <!-- <div class="col-md-3">
                    <div class="col-md-8">
                        <button type="submit" class="btn  btn-brand-secondary btn-sm bg-brand-secondary text-white rounded-8 no-shadow"     
                                id="bayar">Proses Bayar (Enter)</button>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <a type="button" class="btn btn-outline-danger rounded-8" href="{{url('/batal')}}"
                            id="batal">Batal (F5)</a>
                    </div>
                </div> -->
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
                                "<td align='center'><input type='number' min='1' class='form-control input-data-cart' value='" + jumlah + "' id='jumlah_" + id +"' data-id='" + id + "'></td>" +
                                "<td align='center'>" + ((jumlah * hargabarang) / 1000)
                                .toFixed(3) + "</td>" +
                                "<td align='center'><button type='button' class='btn btn-outline-danger btn-sm delete' data-toggle='modal' data-target='#modal-hapus' data-id='" +
                                id + "' data-name='" + namabarang + "'><i class='fa fa-trash'></i></button></td>" +
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
                                "<td align='center'><input type='number' min='1' class='form-control input-data-cart' value='" + jumlah + "' id='jumlah_" + id +"' data-id='" + id + "'></td>" +
                                "<td align='center' id='total_" + id + "'>" + (total / 1000).toFixed(3) + "</td>" +
                                "<td align='center'><button type='button' class='btn btn-outline-danger btn-sm delete' data-toggle='modal' data-target='#modal-hapus' data-id='" +
                                id + "' data-name='" + namabarang + "'><i class='fa fa-trash'></i></button></td>" +
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
        $(document).on("focusin", ".input-data-cart", function(){
            console.log("Saving value " + $(this).val());
            $(this).data('val', $(this).val());
            
        });
        $(document).on("input", ".input-data-cart", function () {
            var prev = $(this).data('val');
            var edit_id = $(this).data('id');
            var jumlah = $(this).val();
            var inputElement = $(this);
            if (jumlah != '' && jumlah > 0) {
                if(prev!=jumlah){
                    console.log("beda"); 
                    $.ajax({
                        url: '/updateCart',
                        type: 'post',
                        data: {
                            _token: CSRF_TOKEN,
                            editid: edit_id,
                            jumlah: jumlah
                        },
                        success: function (response) {
                            // fetchRecords();
                            // alert(response);
                            toastr.success('Berhasil mengubah jumlah barang', 'Success Alert', {timeOut: 5000});
                        },
                        error: function(response) {
                            // alert(response);
                            // alert("Aaaa")
                            alert("Stok kurang");
                            inputElement.val(prev);
                        }
                    });  
                }
            } else {
                $(this).val(prev);
            }
            
            $(this).data('val', jumlah);
        });

        // Delete record
        $(document).on("click", ".delete", function () {
            Swal.fire({
                // icon: 'success',
                title: 'Hapus Data',
                // text: 'Akun berhasil dibuat!',
                showConfirmButton: false,
                html:`<p>Apakah Anda yakin menghapus ${$(this).data('name')} ?</p>` + `<div class="row mt-4"><button type="button" class="btn col mx-2 btn-brand-secondary btn-sm bg-brand-secondary text-white rounded-8 no-shadow delete-cart" data-id="${$(this).data('id')}">Oke (F9)</button><button type="button" onclick="Swal.close()" class="btn col mx-2 btn-outline-danger rounded-8" >Batal (F5)</button></div>`
            })
        });
        $(document).on("click", ".delete-cart", function () {
            console.log("aa");
            Swal.close();
            var delete_id = $(this).data('id');
            var el = this;
            $.ajax({
                url: 'deleteCart/' + delete_id,
                type: 'get',
                success: function (response) {
                    $(el).closest("tr").remove();
                    fetchRecords();
                    toastr.success('Berhasil menghapus barang', 'Success Alert', {timeOut: 5000});
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
