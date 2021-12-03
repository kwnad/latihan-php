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
        <legend>Formulir Syarat Masuk TNI/Polri</legend>
        <form action="proses1.php" method="post">
            <table>
                <tr>
                    <th style="text-align:left">
                    Nama Lengkap
                    </th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama">
                    </td>
                </tr>
                <tr>
                    <th style="text-align:left">
                    Tinggi Badan
                    </th>
                    <th>:</th>
                    <td>
                        <input 
                        type="number" 
                        name="tb"
                        min="100"
                        max="200"
                        placeholder="Tinggi Badan"
                        >
                    </td>
                </tr>
                <tr>
                    <th style="text-align:left">
                    Berat Badan
                    </th>
                    <th>:</th>
                    <td>
                        <input 
                        type="number" 
                        name="bb"
                        min="1"
                        max="100"
                        placeholder="Berat Badan"
                        >
                    </td>
                </tr>
                <tr>
                    <th style="text-align:left">
                    Jenis Kelamin
                    </th>
                    <th>:</th>
                    <td>
                        <input type="radio" name="jk" value="Laki-laki"> Laki-laki
                        <input type="radio" name="jk" value="Perempuan"> Perempuan
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