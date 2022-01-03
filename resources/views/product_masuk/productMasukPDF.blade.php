<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Aqua Fish Invoice</title>


</head>

<style>
    #table-data {
        border-collapse: collapse;
        padding: 3px;
    }

    #table-data td, #table-data th {
        border: 1px solid black;
    }
</style>

<body>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td class="title">
                            <img src="https://i.postimg.cc/gJwn4XK4/PDF-Aqua-Fish-1.png" style="width:100%; max-width:300px;">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>


    <table border="0" id="table-data" width="80%">
        <tr>
            <td width="70px">Invoice ID</td>
            <td width="">: {{ $product_masuk->id }}</td>
            <td width="30px">Created</td>
            <td>: {{ $product_masuk->tanggal }}</td>
        </tr>

        <tr>
            <td>Telepon</td>
            <td>: {{ $product_masuk->supplier->telepon }}</td>
            <td>Alamat</td>
            <td>: {{ $product_masuk->supplier->alamat }}</td>
        </tr>

        <tr>
            <td>Nama</td>
            <td>: {{ $product_masuk->supplier->nama }}</td>
            <td>Email</td>
            <td>: {{ $product_masuk->supplier->email }}</td>
        </tr>

        <tr>
            <td>Product</td>
            <td >: {{ $product_masuk->product->nama }}</td>
            <td>Quantity</td>
            <td >: {{ $product_masuk->qty }}</td>
        </tr>

    </table>

    {{--<hr  size="2px" color="black" align="left" width="45%">--}}


    <table border="0" width="80%">
        <tr align="right">
            <td>Hormat Kami</td>
        </tr>
    </table>

    <table border="0" width="80%">
        <tr align="right">
            <td><img src="https://i.postimg.cc/PJMnBD11/png-clipart-digital-signature-signature-block-signatures-angle-material.png" width="100px" height="100px"></td>
        </tr>

    </table>
    <table border="0" width="80%">
        <tr align="right">
            <td>Sheptian Bagja Utama</td>
        </tr>
    </table>
</div>
