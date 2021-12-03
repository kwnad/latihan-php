<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Masuk Perguruan Tinggi</legend>
        <form action="pro2.php">
            <table>
                <tr>
                    <th style="text-align:left">Nama Lengkap</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama">
                    </td>
                </tr>
                <tr>
                    <th style="text-align:left">Nilai Matematika</th>
                    <th>:</th>
                    <td>
                        <input type="number" name="nilaiMtk" id="">
                    </td>
                </tr>
                <tr>
                    <th style="text-align:left">Nilai Bahasa Indonesia</th>
                    <th>:</th>
                    <td>
                        <input type="number" name="nilaiIndo" id="">
                    </td>
                </tr>
                <tr>
                    <th style="text-align:left">Nilai Bahasa Inggris</th>
                    <th>:</th>
                    <td>
                        <input type="number" name="nilaiIng" id="">
                    </td>
                </tr>
                <tr>
                    <th style="text-align:left">Nilai Kejuruan</th>
                    <th>:</th>
                    <td>
                        <input type="number" name="nilaiK" id="">
                    </td>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="simpan">Daftar</button>
                        <button type="reset">Bersihkan Formulir</button>
                    </th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>