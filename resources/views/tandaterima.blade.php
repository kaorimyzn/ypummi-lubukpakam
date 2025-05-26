
<html>

<head>
    <title>Tanda Terima</title>
    <link rel="icon" href="foto/logo.png">
    <style>
        table {
            border-style: double;
            border-width: 3px;
            border-color: white;
        }

        table tr .text2 {
            text-align: right;
            font-size: 20px;
        }

        table tr .text {
            text-align: center;
            font-size: 20px;
        }

        table tr td {
            font-size: 20px;
            padding: 7px;
        }

        @media print {
            @page {
                size: 4.5in 2.5in;
                size: landscape;
                margin: 10px;
            }
        }
    </style>
</head>

<body style='font-family:tahoma;'>
    <div style="padding-left:50px;padding-top:25px">
        <h2 class="judul" style="color:#0463fa">TANDA TERIMA PENDAFTARAN PPDB</h2>
        <table class="table table-hover table-striped table-bordered" width="100%">
            <tbody>
                <tr style="background-color: #f2f2f2;">
                    <td>Nama Siswa</td>
                    <td>
                        : {{ $data->nama }}
                    </td>
                </tr>
                <tr>
                    <td width="35%">No. HP</td>
                    <td>
                        : {{ $data->nohp }}
                    </td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td>Email</td>
                    <td>
                        : {{ $data->email }}
                    </td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td>Judul Pendaftaran</td>
                    <td>
                        : {{ $data->judulppdb }}
                    </td>
                </tr>
                <tr>
                    <td width="35%">Waktu Pendaftaran</td>
                    <td>
                        : {{  tanggal(date("Y-m-d", strtotime($data->waktupendaftaran))) . ' ' . date("H:i", strtotime($data->waktupendaftaran)); }} W.I.B
                    </td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td>Status</td>
                    <td>
                        : {{ $data->status }}
                    </td>
                </tr>
            </tbody>
        </table>
        <br><br>
        <table cellspacing='0' cellpadding='0' style='width:100%; font-size:20px;border-collapse: collapse;'>
            <tr>
                <td width="450px"></td>
                <td align="center">Hormat Kami, <br><br><br><br><br>(............................)</td>
            </tr>
        </table>
    </div>
</body>

</html>
<script>
    window.print();
</script>