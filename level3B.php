<?php
if(isset($_POST['kirim'])) {
    $a = $_POST['no1'];
    $b = $_POST['no2'];
    $c = $_POST['no3'];


    if ($a > $b){
        if ($b > $c ) {
            echo "Bilangan tengah adalah:". $b;
        } else {
            if ($a > $c ) {
                echo "Bilangan tengah adalah:".$c;
            } else {
                echo "Bilangan tengah adalah:".$a;
            }
        }
    } elseif ($a > $c ) {
        echo "Bilangan tengah adalah:". $a;
    } elseif ( $b > $c) {
       echo "Bilangan tengah adalah:".$c;
    } else {
        echo "Bilangan tengah adalah:".$b;
    }
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
<h2> MENCARI BILANGAN TENGAH</h2>
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