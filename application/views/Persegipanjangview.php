<html>
<head>
    <title>Latihan Model</title>
</head>
<body> 
    <center>
    <h1>Model Persegi Panjang</h1>
    <!--Pemanggilan metode get_panjang dan get_lebar-->
    Nilai Panjang : <?php echo $model->get_panjang(); ?></br>
    Nilai Lebar   : <?php echo $model->get_lebar(); ?></br>

    <!--Pemanggilan metode hitung luas-->
    Luas Persegi Panjang     : <?php echo $model->hitung_luas(); ?></br>
    <!--Pemanggilan metode hitung keliling-->
    Keliling Persegi Panjang : <?php echo $model->hitung_keliling(); ?></br>
    </center>
</body>
</html>