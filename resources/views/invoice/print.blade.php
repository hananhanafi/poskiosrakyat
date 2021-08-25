<html moznomarginboxes mozdisallowselectionprint>
    <head>
        <title>Kios Rakyat - Print Nota</title>
        <style type="text/css">
            html { font-family: "Verdana, Arial"; }
            .content {
                width: 80mm;
                font-size: 12px;
                padding: 5px;
            }
            .title {
                text-align: center;
                font-size: 13px;
                padding-bottom:5px;
                border-bottom: 1px dashed;
            }
            .head {
                margin-top: 5px;
                margin-bottom: 10px;
                padding-bottom: 10px;
                border-bottom:1px solid;
            }
            table {
                width: 100%;
                font-size: 12px;
            }
            .thanks {
                margin-top: 10px;
                padding-top: 10px;
                text-align: center;
                border-top:1px dashed;
            }
            @media print {
                @page {
                    width: 80mm;
                    margin: 0mm;
                }
            }
        </style>
    </head>
    <body onload="window.print()">
        <div class="content">
            <div class="title">
                <b>Kios Rakyat</b>
                <br>
                Yogyakarta
            </div>

            <div class="head">
                <table cellspacing="0" cellpadding="0">
                    <tr>
                        <td style="width:200px">
                            <?php
                            echo Date("d/m/Y", strtotime($sale[0]->tanggal))." ". Date("H:i", strtotime($sale[0]->tanggal));
                            ?>
                        </td>
                        <td>Kasir</td>
                        <td style="text-align:center; width:10px">:</td>
                        <td style="text-align:right">
                            <?=ucfirst($sale[0]->nama)?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?=$sale[0]->kode_pesanan?>
                        </td>
                        <td></td>
                        <td style="text-align:center"></td>
                        <td style="text-align:right"></td>
                    </tr>
                </table>
            </div>

            <div class="transaction">
                <table class="transaction-table" cellspacing="0" cellpadding="0">
                    <?php
                    $subtotal = 0;
                    foreach ($sale_detail as $key => $value) { ?>
                        <tr>
                            <td style="width:165px"><?=$value->nama?></td>
                            <td><?=$value->jumlah?></td>
                            <td style="text-align:right; width:60px"><?=$value->harga?></td>
                            <td style="text-align:right; width:60px">
                                <?=$value->harga * $value->jumlah?>
                            </td>
                        </tr>
                        <?php
                        $subtotal = $subtotal + $value->harga;
                    } ?>

                    <tr>
                        <td colspan="4" style="border-bottom:1px dashed; padding-top:5px"></td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td style="text-align:right; padding-top:5px">Sub Total</td>
                        <td style="text-align:right; padding-top:5px">
                            @if (isset($post))
                                {{str_replace('Rp ','',$post['subtotal'])}}
                            @else
                                {{ $subtotal }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td style="text-align:right; padding-bottom:5px">Diskon</td>
                        <td style="text-align:right; padding-bottom:5px">
                            @if (isset($post))
                                {{$post['diskon']}}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td style="border-top:1px dashed; text-align:right; padding:5px 0">Grand Total</td>
                        <td style="border-top:1px dashed; text-align:right; padding:5px 0">
                            @if (isset($post))
                                {{str_replace('Rp ','',$post['totalakhir'])}}
                            @else
                                {{ $subtotal }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td style="border-top:1px dashed; text-align:right; padding-top:5px">Bayar</td>
                        <td style="border-top:1px dashed; text-align:right; padding-top:5px">
                            @if (isset($post))
                                {{$post['tunai']}}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td style="text-align:right">Kembali</td>
                        <td style="text-align:right">
                            @if (isset($post))
                                {{$post['kembalian']}}
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
            <div class="thanks">
                ~~~ Thank You ~~~
            </div>
        </div>
    </body>
</html>
