<!DOCTYPE html>
<head>
    <title>Form Input Tamu</title>
</head>
<body>
    <h2>Input Data Tamu</h2>

    <form action="/simpantamu" method="POST">
    @csrf
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>Nomor Kamar:</label><br>
        <input type="text" name="nomorkamar"><br><br>

        <label>Tanggal Check-In:</label><br>
        <input type="date" name="tanggalcheckin"><br><br>

        <label>Tanggal Check-Out:</label><br>
        <input type="date" name="tanggalcheckout"><br><br>

        <label>Status Pembayaran:</label><br>
        <input type="text" name="StatusPembayaran"><br><br>

        <button type="submit">Simpan</button>
    </form>
    
</body>
</html>