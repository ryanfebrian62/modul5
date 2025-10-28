<!DOCTYPE html>
<head>   
    <title>Daftar Tamu</title>
</head>
<body>
    <h2>Daftar Tamu</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NomorKamar</th>
            <th>TanggalCheck-in</th>
            <th>TanggalCheck-out</th>
            <th>StatusPembayaran</th>
        </tr>
        @foreach ($tamu as $tm )
        <tr>
            <td>{{ $tm->id }}</td>
            <td>{{ $tm->nama }}</td>
            <td>{{ $tm->nomorkamar }}</td>
            <td>{{ $tm->tanggalcheckin }}</td>
            <td>{{ $tm->tanggalcheckout }}</td>
            <td>{{ $tm->StatusPembayaran }}</td>
        </tr>
        @endforeach
    </table>
    
</body>
</html>