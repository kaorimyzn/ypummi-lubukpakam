<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <title>Raport Nilai - {{ $user->nama }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12pt;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        h2 {
            margin: 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
        }

        th {
            background-color: #f0f0f0;
        }

        .info {
            margin-bottom: 20px;
        }

        .info td {
            border: none;
            padding: 4px 0;
        }

        .footer {
            margin-top: 50px;
            text-align: right;
        }
    </style>
</head>

<body>

    <div class="header">
        <h2>Raport Nilai Siswa</h2>
        <p>Tahun Ajaran: {{ $nilai->tahun }} - Semester: {{ $nilai->semester }}</p>
    </div>

    <table class="info" width="100%">
        <tr>
            <td><strong>Nama Siswa</strong></td>
            <td>: {{ $user->nama }}</td>
        </tr>
        <tr>
            <td><strong>Kelas</strong></td>
            <td>: {{ $user->namakelas }}</td>
        </tr>
    </table>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Mata Pelajaran</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            @php $no=1; @endphp
            @foreach ($nilaidetail as $detail)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $detail->namamatapelajaran }}</td>
                    <td style="text-align:center;">{{ $detail->nilai }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        <p>{{ date('d F Y') }}</p>
        <p>Guru/Wali Kelas</p>
        <br><br><br>
        <p>_________________________</p>
    </div>

</body>

</html>
