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

        left: 16px;
    }

    a {
        color: #5D6975;
        text-decoration: underline;
    }

    .topright {
        position: absolute;
        top: 8px;
        right: 16px;
        font-size: 18px;
        width: 15%;
    }

    .topleft {
        position: absolute;
        top: 8px;
        left: 16px;
        font-size: 18px;
        width: 15%;
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
        text-align: center;
    }

    h1 {
        color: #5D6975;
        font-size: 2.0em;
        font-weight: normal;
        text-align: center;
    }

    h2 {
        border-bottom: 1px solid #5D6975;
        font-size: 1.5em;
        font-weight: normal;
        text-align: left;
    }

    h3 {
        border-top: 1px solid #5D6975;
        font-weight: normal;
        text-align: center;
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
        border: 1px solid #5D6975;
        font-weight: bold;
    }

    table .service,
    table .desc {
        text-align: left;
    }

    table td {
        padding: 5px;
        text-align: center;
        border: 1px solid #5D6975;
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
        <div class="d-flex justify-content-between pl-4 pr-4 pt-3 pb-4 mt-3" style="margin-bottom:50px ">
            <img src="assets/images/logo/BUMN.png" class="topleft">
            <img src="assets/images/logo/PAL.png" class="topright">
        </div>
    </header>
    <main>
        <h1>List Dokumen Divisi TI</h1>
        <h3>
            <?php
             $tgl=date('d-m-Y');
                echo $tgl;
            ?>
        </h3>
        @foreach($kategoris as $kat)
        <?php
            $count = 0;
            $counter = 0;
        ?>
        @foreach($dokumens as $dok)
        @if($dok->kategori_id == $kat->id)
        <?php
            $count++;
        ?>
        @endif
        @endforeach
        @if($count>0)
        <h2>{{$kat->nama}}</h2>
        <h4> Jumlah Dokumen:{{$count}}</h4>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Dokumen</th>
                    <th>Tanggal Revisi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dokumens as $dok)
                @if($dok->kategori_id == $kat->id)
                <?php
                    $counter++;
                ?>
                <tr>
                    <td class="qty">{{ $counter }}</td>
                    <td class="service">{{ $dok->nama_dokumen }}</td>
                    <td>{{$dok->created_at}}</td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
        @endif
        @endforeach
    </main>

</body>

</html>