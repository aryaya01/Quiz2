<html>
    <head>
        <title>Quiz Hitung Gaji</title>
    </head>
    <body>
        <FORM ACTION="prosesHG.php" METHOD="POST" NAME="INPUT">
            <h2>Hitung Gaji Karyawan</h2>
            ========================================</br></br>
            NIP  : <input type="text" name="nip"></br></br>
            Nama Pegawai: <input type="text" name="nama"></br></br>
            ========================================</br></br>
            Gaji Pokok : <input type="text" name="gp"></br></br>
            Bonus : <input type="text" name="bn"></br></br>
            Tunjangan : 5% dari gaji pokok</br></br>
            Pajak : 10% dari gaji</br></br>
            ========================================</br></br>
            <input type="submit" name="sumbit" value="Hitung"></br>
        </FORM>
    </body>
</html>