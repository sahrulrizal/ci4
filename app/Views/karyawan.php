<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Karyawan</title>
</head>
<body> 
    <table>
        <thead>
            <tr>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($karyawan as $row):?>
            <tr>
                <td><?= $row['nama'];?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>