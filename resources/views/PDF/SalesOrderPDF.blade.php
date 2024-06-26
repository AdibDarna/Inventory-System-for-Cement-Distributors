<html>

<head>
    <title>Sales Order Preview PDF</title>

    <style>
        body {
            width: 100%;

            margin: 0;
            padding: 0;
            background-color: #FAFAFA;
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .tablePreview {
            width: 90vw;
            border: 1px solid black;
            padding: 10px;
            border-radius: 5px;
            border-collapse: collapse;
        }

        .tablePreview td,
        th {
            border: 1px solid black;
            padding: 5px;
            border-radius: 5px;
            border-collapse: collapse;
        }

        .f-8 {
            font-size: 6pt;
        }
    </style>
</head>

<body>
    <div>
        <div style="display: flex;
        align-items: center;
        gap: 50px;
        margin-top: 30px;">
            <img src="/assets/img/Logo_DIS.png" alt="main_logo" width="50">
            <center>
                <h3>PT. KONSTRUKSI LUAR</h3>
                <h5>DISTRIBUTOR SEMEN PADANG | Jl. Sultan Hasanuddin No. 12 H - Simp. Pangkalan Sena
                    <p>Telp.(0765)36500 | Fax.(0765)32113 | HP.0812 750 0070, 0853 5588 0380</p>
                    <p>E-mail : dumai_indah_sejati@yahoo.co.id</p>
                </h5>
            </center>
        </div>
        <hr style="border-block-color: black">
        <hr style="border-block-color: black">
        <br>
        <div>
            <table class="f-8">
                <tr>
                    <td>jumlah Biaya</td>
                    <td>:</td>
                    <td>Rp. <span id="jumlahbiaya"></span></td>
                </tr>
                <tr>
                    <td>jumlah Quantity</td>
                    <td>:</td>
                    <td><span id="jumlahQTY"></span></td>
                </tr>
                <tr>
                    <td>jumlah Transaksi</td>
                    <td>:</td>
                    <td><span id="jumlahTrans"></span></td>
                </tr>

            </table>
        </div>
        <div>
            <table class="tablePreview f-8">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode SO</th>
                        <th>Tanggal</th>
                        <th>Tanggal Sampai</th>
                        <th>Supplier</th>
                        <th>Merek Semen</th>
                        <th>Qty</th>
                        <th>Total Harga</th>
                        <th>Mobil</th>
                        <th>Supir</th>
                        <th>Biaya Pemesanan</th>
                        <th>Pembayaran</th>
                        <th>Debit</th>
                        <th>Status</th>
                    </tr>
                </thead>
                @php
                    $i = 1;
                @endphp
                @foreach ($so as $s)
                    <tr>
                        <th>{{ $i }}</th>
                        <td>{{ $s->kode_so }}</td>
                        <td>{{ $s->tanggal }}</td>
                        <td>{{ $s->tanggal_sampai }}</td>
                        <td>{{ $s->supplier }}</td>
                        <td>{{ $s->merek_semen }}</td>
                        <td>{{ $s->qty }}</td>
                        <td>{{ 'Rp. ' . number_format($s->total_harga, 0, ',', '.') }}</td>
                        <td>{{ $s->plat_nomor }}</td>
                        <td>{{ $s->nama_supir }}</td>
                        <td>{{ 'Rp. ' . number_format($s->biaya_pemesanan, 0, ',', '.') }}</td>
                        <td>{{ $s->pembayaran }}</td>
                        <td>{{ $s->debit }}</td>
                        <td>{{ $s->status }}</td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                @endforeach
            </table>
        </div>

    </div>
    <script>
        window.onload = (event) => {
            var SpanJumlahBiaya = document.getElementById('jumlahbiaya');
            var SpanJumlahQTY = document.getElementById('jumlahQTY');
            var SpanJumlahTrans = document.getElementById('jumlahTrans');
            var jumlahbiaya = 0;
            var jumlahqty = 0;
            var jumlahtrans = 0;
            @foreach ($so as $dataSO)
                jumlahbiaya += {{ $dataSO->total_harga }}
                jumlahqty += {{ $dataSO->qty }}
                jumlahtrans++
            @endforeach
            SpanJumlahBiaya.innerHTML = jumlahbiaya.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
            SpanJumlahQTY.innerHTML = jumlahqty.toString();
            SpanJumlahTrans.innerHTML = jumlahtrans.toString();
            window.print();
        };
    </script>
</body>

</html>
