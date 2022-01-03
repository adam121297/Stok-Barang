<!doctype html>
<html>
<head>
    <title>BBBootstrap.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href='https://use.fontawesome.com/releases/v5.7.2/css/all.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link rel="stylesheet" href="style.css"


</head>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>


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
                            <img src="https://www.sparksuite.com/images/logo.png" style="width:100%; max-width:300px;">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

        <div class="card-body">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h5 class="mb-3">From:</h5>
                    <h3 class="text-dark mb-1">Tejinder Singh</h3>
                    <div>29, Singla Street</div>
                    <div>Sikeston,New Delhi 110034</div>
                    <div>Email: contact@bbbootstrap.com</div>
                    <div>Phone: +91 9897 989 989</div>
                </div>

                <div class="col-sm-6 ">
                    <h5 class="mb-3">To:</h5>
                    <h3 class="text-dark mb-1">Sanjat Singh</h3>
                    <div>629, Teeru Street</div>
                    <div>Chandni chowk, New delhi, 110006</div>
                    <div>Email: contact@tunhi.com</div>
                    <div>Phone: +91 9895 344 390</div>


                </div>

            </div>

            <div class="table-responsive-sm">
                <table class="table table-striped">
                    <table border="0" id="table-data" width="80%">
            <tr>
                <td width="70px">Invoice ID</td>
                <td width="">: {{ $product_keluar->id }}</td>
                <td width="30px">Created</td>
                <td>: {{ $product_keluar->tanggal }}</td>
            </tr>

            <tr>
                <td>Telepon</td>
                <td>: {{ $product_keluar->customer->telepon }}</td>
                <td>Alamat</td>
                <td>: {{ $product_keluar->customer->alamat }}</td>
            </tr>

            <tr>
                <td>Nama</td>
                <td>: {{ $product_keluar->customer->nama }}</td>
                <td>Email</td>
                <td>: {{ $product_keluar->customer->email }}</td>
            </tr>

            <tr>
                <td>Product</td>
                <td >: {{ $product_keluar->product->nama }}</td>
                <td>Quantity</td>
                <td >: {{ $product_keluar->qty }}</td>
            </tr>

        </table>

                    </tbody>

            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-5">
                </div>
                <div class="col-lg-4 col-sm-5 ml-auto">
                    <table class="table table-clear">
                        <tbody>
                            <tr>
                                <td class="left">
                                    <strong class="text-dark">Subtotal</strong>
                                </td>
                                <td class="right">$28,809,00</td>
                            </tr>
                            <tr>
                                <td class="left">
                                    <strong class="text-dark">Discount (20%)</strong>
                                </td>
                                <td class="right">$5,761,00</td>
                            </tr>
                            <tr>
                                <td class="left">
                                    <strong class="text-dark">VAT (10%)</strong>
                                </td>
                                <td class="right">$2,304,00</td>
                            </tr>
                            <tr>
                                <td class="left">
                                    <strong class="text-dark">Total</strong> </td>
                                <td class="right">
                                    <strong class="text-dark">$20,744,00</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-footer bg-white">
            <p class="mb-0">BBBootstrap.com, Sounth Block, New delhi, 110034</p>
        </div>
    </div>
</div>
