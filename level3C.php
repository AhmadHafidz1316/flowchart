<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2> MENCARI SEGITIGA</h2>
    <form action="#" method = "post">
        ANGKA1<br> <input type="text" name ="x"></input> <br>
        <br>
        ANGKA2 <br> <input type="text" name ="y"></input> <br>
        <br>
        ANGKA3 <br> <input type="text" name ="z"></input> <br>
        <br>
        <input type="submit" name="kirim" value="kirim">
    </form>
    <?php
    if(isset($_POST['kirim'])){
        $x = $_POST['x'];
        $y = $_POST['y'];
        $z = $_POST['z'];

       
        if($x==0 || $y==0 || $z == 0 ) {
            echo "tidak ada segitiga" ;
        } elseif ( $x==$y && $y==$z){
            echo"segitiga sama sisi";
        }
         elseif($x==$y || $x==$z || $y==$z){
            echo"segitiga sama kaki";
        } 
        else{
            echo"segitiga sembarang";
        }
    }
    ?>
</body>
</html>