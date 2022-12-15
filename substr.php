<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Fungsi : String Substr</h2>
    <?php
    $string="Pemograman web PHP";
    $word=substr($string,16,3);
    echo("\"$string\"<br>");
    echo("Hasil substr (15,3) adalah $word");
    ?>
    
</body>
</html>