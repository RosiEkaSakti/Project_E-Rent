<html>
<head>
    <title>Belajar Menggunakan Database</title>
</head>
<body>
    <table>
        <tr>
            <th> NIK </th>
            <th> NAMA </th>
            <th> Alamat </th>
        </tr>
            <?php foreach ($perawat as $hasil) {?>
        <tr>
            <td> <?php echo $hasil->NIK ; ?> </td>
            <td> <?php echo $hasil->NAMA ; ?> </td>
            <td> <?php echo $hasil->Alamat ; ?> </td>
        </tr>
            <?php } ?>
    </table>
</body>
</html>