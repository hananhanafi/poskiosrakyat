@extends('layout.main')
@section('transaction_menu_open', 'menu-is-opening menu-open')
@section('transaction_aktif', 'active')
@section('pembelian_aktif', 'active')
<link rel="stylesheet" type="text/css" href="{{asset('jqueryui/jquery-ui.min.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('navigation')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Beranda</a></li>
        <li class="breadcrumb-item active">Transaksi Pembelian</li>
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
                                    <!-- hide -->
                                    <div class="form-group row d-none">
                                        <label for="hargajual" class="col-sm-6 col-form-label">Harga Jual</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="hargajual" id="hargajual" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row d-none">
                                        <label for="foto" class="col-sm-6 col-form-label">Foto Produk</label>
                                        <div class="col-sm-6">
                                            {{-- <input type="text" class="form-control" name="foto" id="foto"> --}}
                                            <img src="" id="foto" style="width: 150px;">
                                        </div>
                                    </div>
                                    <!-- hide -->
                                </div>
                                <div class="col-md-3">
                                    <!-- hide -->
                                    <div class="form-group row d-none">
                                        <label for="hargadiskon" class="col-sm-6 col-form-label">Harga Setelah Diskon</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="hargadiskon" id="hargadiskon" readonly>
                                        </div>
                                    </div>
                                    <!-- hide -->
                                    <div class="form-group row">
                                        <label for="jumlah" class="pl-4 col-form-label text-right">Jumlah Beli</label>
                                        <div class="col">
                                            <input type="number"  min='1' class="form-control" name="jumlah" id="jumlah">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group row">
                                        <label for="hargabeli" class="col-form-label">Harga Beli</label>
                                        <div class="col-sm-5">
                                            <input type="number" class="form-control" name="hargabeli" id="hargabeli">
                                        </div>
                                        <div class="col-4">
                                            <button type="button" id="addcart" class="btn  btn-brand-secondary btn-sm bg-brand-secondary text-white rounded-8 no-shadow float-right"><i class="fas fa-plus"></i> Tambah (F9)</button>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <div class="col-4">
                                            <button type="button" id="addcart" class="btn  btn-brand-secondary btn-sm bg-brand-secondary text-white rounded-8 no-shadow float-right"><i class="fas fa-plus"></i> Tambah (F9)</button>
                                        </div>
                                    </div> -->
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
                            <h4><b>Keranjang Beli</b></h4>
                        </div>
                        <div class="card-body">
                            <div class="" style="overflow-x:auto">
                                <table id="cartTable" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Harga Beli</th>
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

            
            <div class="col-md-12">
                <div class="card">
                    <!-- form start -->
                    <div class="card-header text-lg py-3">
                        <h4><b>Pembayaran</b></h4>
                    </div>  
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="email" class="col-sm-8 col-form-label">Total</label>
                            <div class="col">
                                <button type="submit" class="btn  btn-brand-secondary btn-sm bg-brand-secondary text-white rounded-8 no-shadow w-100"     
                                        id="btn-simpan" >Simpan</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="totalbeli" id="totalbeli" readonly value="0">
                            </div>
                            <div class="col">
                                <a type="button" class="btn btn-outline-danger rounded-8 w-100" href="{{url('/batal')}}"
                                    id="batal">Batal</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>

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
                console.log("ui",ui);
                // Set selection
                $('#namabarang').val(ui.item.label); // display the selected text
                $('#hargabeli').val(ui.item.price_int); // save selected id to input
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

        // fetchRecords();

        var purchase_products = [];
        function getArrOfPurchaseProducts() {
            var result = [];
            for (var key in purchase_products) {
                var obj = purchase_products[key]
                result.push(obj);
            }
            return result;
        }

        $('#addcart').click(function () {
            var idretailerproduk = $('#idretailerproduk').val();
            var kode_produk = $('#kode_produk').val();
            var namabarang = $('#namabarang').val();
            var jumlah = $('#jumlah').val();
            var hargabeli = $('#hargabeli').val();
            var hargajual = $('#hargajual').val();
            var deskripsiproduk = $('#deskripsiproduk').val();
            var hargadiskon = $('#hargadiskon').val();
            var hargabarang = hargadiskon ? hargadiskon : hargajual;
            var foto = $('#foto').val();

            var product = {
                "id_retailer_produk" : idretailerproduk,
                "kode_produk" : kode_produk,
                "nama_barang" : namabarang,
                "jumlah" : jumlah,
                "harga_beli" : hargabeli,
                "harga_jual" : hargajual,
                "deskripsi_produk" : deskripsiproduk,
                "harga_diskon" : hargadiskon,
                "harga_barang" : hargabarang,
                "foto" : foto,
            };

            console.log("product",product);
            purchase_products[kode_produk] = product;
            // purchase_products.push(product);
            console.log("purchase_products",purchase_products);
            if (idretailerproduk != '' && jumlah != '') {
                var findnorecord = $(`#row_${kode_produk}`).length;

                if (findnorecord > 0) {
                    $(`#row_${kode_produk}`).remove();
                }
                var tr_str = "<tr id='row_" + kode_produk + "'>" +
                    "<td>" + kode_produk + "</td>" +
                    "<td>" + namabarang + "</td>" +
                    "<td align='center'>" + (hargabeli / 1000).toFixed(3) +
                    "</td>" +
                    "<td align='center'><input type='number' min='1' class='form-control input-data-cart' value='" + jumlah + "' id='jumlah_" + kode_produk +"' data-id='" + kode_produk + "'></td>" +
                    "<td align='center' id='total_" + kode_produk + "'>" + ((jumlah * hargabeli)/ 1000).toFixed(3)  + "</td>" +
                    "<td align='center'><button type='button' class='btn btn-outline-danger btn-sm delete' data-toggle='modal' data-target='#modal-hapus' data-id='" +
                    kode_produk + "' data-name='" + namabarang + "'><i class='fa fa-trash'></i></button></td>" +
                    "</tr>";

                $("#cartTable tbody").append(tr_str);
                // fetchRecords();
                totalSum();

                // Empty the input fields
                $('#namabarang').val('');
                $('#hargajual').val('');
                $('#deskripsiproduk').val('');
                $('#hargadiskon').val('');
                $('#jumlah').val('');
                $('#foto').val('');
                document.getElementById('namabarang').focus();
            } else {
                // alert('Inputan tidak boleh kosong!');
                toastr.error('Inputan tidak boleh kosong!', 'Error Alert', {timeOut: 5000});
                document.getElementById('namabarang').focus();
            }
        });


        $(document).on("input", ".input-data-cart", function () {
            var edit_id = $(this).data('id');
            var jumlah = $(this).val();
            var inputElement = $(this);
            var hargabeli = purchase_products[edit_id]['harga_beli'];
            purchase_products[edit_id]['jumlah'] = jumlah;
            $(`#total_${edit_id}`).html(((jumlah * hargabeli)/ 1000).toFixed(3));
            console.log("purchase_products",purchase_products);
            console.log("edit_id",edit_id);
            totalSum();
        });

        function totalSum() {
            var total = 0;
            for (var key in purchase_products) {
                var obj = purchase_products[key];
                console.log("obj",obj);
                console.log("key",key);
                total = total + parseInt(obj['jumlah']*obj['harga_beli'])
                // console.log("ttl",total);
            }
            
            $("#totalbeli").val((total / 1000).toFixed(3));
            console.log("ttl",total);
        }

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
            delete purchase_products[delete_id];
            $(`#row_${delete_id}`).remove();
        });
        $(document).on("click", "#btn-simpan", function () {
            const formData = getArrOfPurchaseProducts();
            console.log("aa",purchase_products);
            console.log("formData",formData);
            $.ajax({
                url: '/pembelian/save',
                type: 'post',
                dataType: "json",
                data: {
                    _token: CSRF_TOKEN,
                    purchase_products: JSON.stringify(formData)
                },
                success: function (response) {
                    // alert(response);

                    // empty the fields
                    purchase_products = [];
                    $('#cartTable tr').remove();
                    totalSum();
                    toastr.success('Berhasil menyimpan pembelian barang', 'Success Alert', {timeOut: 5000});
                },
                error: function(response) {
                    // alert(response);
                    // alert("Aaaa")
                    toastr.error('Terjadi error', 'Error Alert', {timeOut: 5000});
                }
            });
        });

    });

</script>
@endsection
