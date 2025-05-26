<!DOCTYPE html>
<html>

<head>
    <title>Raport Nilai Semua</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
            color: #222;
            margin: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 2px;
            border-bottom: 3px solid #444;
            padding-bottom: 10px;
        }

        .header {
            margin-bottom: 15px;
        }

        .header h3 {
            margin: 0;
            font-weight: 700;
            font-size: 16px;
        }

        .header p {
            margin: 3px 0 0 0;
            font-style: italic;
            color: #555;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        th,
        td {
            border: 1px solid #999;
            padding: 8px 10px;
        }

        th {
            background-color: #f2f2f2;
            font-weight: 700;
            text-align: left;
        }

        tbody tr:nth-child(even) {
            background-color: #fafafa;
        }

        hr {
            border: none;
            border-top: 1px solid #ccc;
            margin: 40px 0;
        }
    </style>
</head>

<body>
    <h2>Raport Nilai Siswa</h2>

    @foreach ($nilai as $item)
        <div class="header">
            <h3>Nama: {{ $item->user->nama ?? '-' }}</h3>
            <h3>Kelas: {{ $item->user->namakelas ?? '-' }}</h3>
            <p>Tahun: {{ $item->tahun }} | Semester: {{ $item->semester }}</p>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Mata Pelajaran</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($item->details as $detail)
                    <tr>
                        <td>{{ $detail->namamatapelajaran }}</td>
                        <td>{{ $detail->nilai }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <hr>
    @endforeach
</body>

</html>
