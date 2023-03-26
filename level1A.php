<?php
if(isset($_POST['kirim'])) {
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];

if($bil1 > $bil2) {
 echo $$bil1;
} else {
    echo $bil2;
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
    <h2> MENCARI BILANGAN TERBESAR</h2>
    <form action="#" method="post">
<label> Bil 1 </label>
<input type="number" name="bil1">
<label> Bil 2 </label>
<input type="number" name="bil2">
<input type="submit" value="kirim" name="kirim">
</form>
</body>
</html>