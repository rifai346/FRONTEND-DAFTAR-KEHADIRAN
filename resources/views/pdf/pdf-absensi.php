<!DOCTYPE html>
<html>
<head>
    <title>Daftar Hadir</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h2>Daftar Hadir</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ID Kehadiran</th>
                <th>NPM</th>
                <th>ID Matkul</th>
                <th>Pertemuan</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
        @foreach($absen as $index )
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $absen['id_kehadiran'] }}</td>
                <td>{{ $absen['npm'] }}</td>
                <td>{{ $absen['id_dosen'] }}</td>
                <td>{{ $absen['id_matkul'] }}</td>
                <td>{{ $absen['pertemuan'] }}</td>
                <td>{{ $absen['keterangan'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
