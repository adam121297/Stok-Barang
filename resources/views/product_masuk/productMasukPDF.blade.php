<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Nota Pemnbelian - Aqua Fish</title>
		<style>
    .invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

    .invoice-box table {
				width: 660px;
				/* line-height: inherit; */
				text-align: left;
			}

    .invoice-box table td {
  				padding: 5px;
  				vertical-align: top;
  			}

    .invoice-box table tr td:nth-child(2) {
    				text-align: right;
    		}

    .invoice-box table tr.top table td {
    				padding-bottom: 20px;
    		}

    .invoice-box table tr.top table td.title {
    				font-size: 45px;
    				line-height: 45px;
    				color: #333;
    		}

    .invoice-box table tr.information table td {
    				padding-bottom: 40px;
    		}

    .invoice-box table tr.heading td {
    				background: #eee;
    				border-bottom: 1px solid #ddd;
    				font-weight: bold;
    	  }

    .invoice-box table tr.details td {
  				padding-bottom: 20px;
  			}

  	.invoice-box table tr.item td {
  				border-bottom: 1px solid #eee;
  			}

  	.invoice-box table tr.item.last td {
  				border-bottom: none;
  			}

    .invoice-box table tr.total td:nth-child(2) {
    				border-top: 2px solid #eee;
    				font-weight: bold;
    			}

    			@media only screen and (max-width: 600px) {
    				.invoice-box table tr.top table td {
    					width: 100%;
    					display: block;
    					text-align: center;
    				}

    				.invoice-box table tr.information table td {
    					width: 100%;
    					display: block;
    					text-align: center;
    				}

          }

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}

		</style>
	</head>

	<body>
		<div class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									<img src="https://i.ibb.co/cxvZYRM/logomiring-AF.png" style="width: 100%; max-width: 300px" />
								</td>

								<td>
									ID Nota: {{ $product_masuk->id }}<br />
									Waktu: {{ $product_masuk->tanggal }}<br />
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									Home Aqua Fish<br />
									Tangerang<br />
									Indonesia
								</td>

								<td>
									Pemasok : <br />
									{{ $product_masuk->supplier->nama }}<br />
									{{ $product_masuk->supplier->email }}<br />
                  {{ $product_masuk->supplier->telepon }}<br />
                  {{ $product_masuk->supplier->alamat }}<br />
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td>Produk</td>

					<td>Jumlah</td>
				</tr>

				<tr class="item">
					<td>{{ $product_masuk->product->nama }}</td>

					<td>{{ $product_masuk->qty }}</td>
				</tr>
			</table>
    </br>
    </br>
    </br>
      {{--<hr  size="2px" color="black" align="left" width="45%">--}}


      <table border="0" width="80%">
          <tr align="right">
              <td>Hormat Kami</td>
          </tr>
      </table>

      <table border="0" width="80%">
          <tr align="right">
              <td><img src="https://i.ibb.co/ZBPyDgy/stample-AF1.png" width="120px" height="100px"></td>
          </tr>

      </table>
      <table border="0" width="80%">
          <tr align="right">
              <td>Home Aquafish</td>
          </tr>
      </table>
		</div>
	</body>
</html>
