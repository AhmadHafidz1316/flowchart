<?php
if(isset($_POST['kirim'])) {
    $i = $_POST['no1'];
    $j = $_POST['no2'];
    $k = $_POST['no3'];

    $angka = array($i,$j,$k);
    for($i = 0 ; $i <= 2; $i ++) {
    } for ($j = 0 ; $j <= 1 ; $j++) {
        for($k = $j + 1 ; $k <= 2 ; $k++){
            if ($angka[$j] > $angka[$k]) {
                $swap = $angka[$j];
                $angka[$j] = $angka[$k];
                $angka[$k] = $swap;
            }
        }
    }
    echo $angka[0] . $angka[1] . $angka[2];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2> MENCARI BILANGAN DARI TERKECIL HINGGA TERBESAR</h2>
    <form action="#" method="post">
    angka 1
    <input type="number" name="no1" >
    angka 2
    <input type="number" name="no2" >
    angka 3
    <input type="number" name="no3" >
    <input type="submit" name="kirim"value="kirim">
    </form>
</body>
</html>