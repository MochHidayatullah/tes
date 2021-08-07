<html>
<head>  
    <title>tes masuk</title>
</head>
<body>
    
    <h3 align="center" >Form Katalog Perpusatakaan</h3>

    <table align="center" bgcolor="green" widht=60%>
        <tr>
            <td>Nama Guru</td>
            <td>:</td>
            <td>
                <input type="text" name="namaguru" size="40" placeholder="Masukan Nama Guru....">
            </td>
        </tr>

        <tr>
            <td>Kode Buku</td>
            <td>:</td>
            <td>
                <input type="text" name="kodebuku" size="20" placeholder="Masukan Kode Buku....">
            </td>
        </tr>

        <tr>
            <td>Judul</td>
            <td>:</td>
            <td>
                <input type="text" name="judul" size="20" placeholder="Masukan Judul Buku....">
            </td>
        </tr>

        <tr>
            <td>Nama Pengarang</td>
            <td>:</td>
            <td>
                <input type="text" name="namapengarang" size="40" placeholder="Masukan Nama Pengarang....">
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <input type="submit" name="simpan" value="Simpan">
                <input type="reset" name="batal" value="Batal">
                <input type="button" name="kembali" value="Kembali" onclick="self.history.back()">
            </td>
        </tr>
    </table>
</body>
</html>