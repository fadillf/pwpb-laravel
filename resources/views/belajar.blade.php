<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman 2</title>
</head>
<body>
    <table>
        <tr>
            <td>No</td>
            <td>Nama Lengkap</td>
            <td>Jenis Kelamin</td>
            <td>No Telp</td>
        </tr>
        @foreach ($siswa as $row)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$row->nis}}</td>
            <td>{{$row->nama_lengkap}}</td>
            <td>{{$row->jenis_kelamin}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>