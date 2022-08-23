<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>List Dokumen Divisi TI</title>

    <style>
        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        a {
            color: #5D6975;
            text-decoration: underline;
        }

        body {
            position: relative;
            height: 29.7cm;
            width: 100%;
            margin: 0 auto;
            color: #001028;
            background: #FFFFFF;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-family: Arial;
        }

        header {
            width: 100%;
            padding: 10px 0;
            margin-bottom: 30px;
        }

        h1 {
            border-bottom: 1px solid #5D6975;
            color: #5D6975;
            font-size: 2.4em;
            line-height: 1.4em;
            font-weight: normal;
            text-align: left;
            margin: 0 0 20px 0;
            background: url(dimension.png);
        }

        #identity {
            display: flex;
        }

        #project {
            float: left;
        }

        #project span {
            color: #5D6975;
            text-align: right;
            margin-right: 10px;
            font-size: 0.9em;
        }

        #company {
            text-align: center;
        }

        #project div,
        #company div {
            white-space: nowrap;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px;
        }

        table th,
        table td {
            text-align: center;
        }

        table th {
            padding: 5px 20px;
            color: #5D6975;
            border-bottom: 1px solid #5D6975;
            white-space: nowrap;
            font-weight: bold;
        }

        table .service,
        table .desc {
            text-align: left;
        }

        table td {
            padding: 15px;
            text-align: center;
        }

        table td.service,
        table td.desc {
            vertical-align: top;
        }

        table td.qty {
            text-align: center;
        }

        table td.service,
        table td.unit,
        table td.qty,
        table td.total,
        table td.grand {
            font-size: 1.2em;
        }

        table td.grand {
            border-top: 1px solid #5D6975;
            font-weight: bold;
        }

        #notices .notice {
            color: #5D6975;
            font-size: 1.2em;
        }

        footer {
            color: #5D6975;
            width: 100%;
            height: 30px;
            position: absolute;
            bottom: 0;
            border-top: 1px solid #C1CED9;
            padding: 8px 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <header class="clearfix">
        <h1>List Dokumen Divisi TI</h1>
        {{--  <div class="d-flex justify-content-between pl-4 pr-4 pt-3 pb-4 mt-3" style="margin-bottom:50px ">
            <img src="{{ asset('assets/images/logo/logo-bumn.png') }}" alt="image" style="width: 15%;">
            <img src="{{ asset('assets/images/logo-pal.png') }}" alt="Card image cap" style="width: 15%;">
        </div>  --}}
        {{-- <div id="identity">
            <div id="project" >
                <div><strong>Pembeli:</strong></div>
                <div>567</div>
                <div>123</div>
                <div>zxc</div>
                <div>qwe</div>
                <div>asd</div>
            </div>
            <div id="company" class="clearfix">
                <div><strong>Metode Pembayaran:</strong></div>
                <div>ghj</div>
                <div style="margin-top: 25px"><strong>Tanggal Pemesanan:</strong></div>
                <div>cvb</div>
            </div>
        </div> --}}
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Kategori</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategoris as $kat)
                    <tr>
                        <td class="qty">{{ $loop->iteration }}</td>
                        <td class="service">{{ $kat->nama }}</td>  
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>

</body>

</html>
