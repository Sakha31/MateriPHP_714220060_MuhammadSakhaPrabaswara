<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan kontrol while</title>
</head>
<body>
    <?php
    $hari=array("senin","selasa","rabu","kamis","jum'at","sabtu","minggu");
    $i=0;
    while($i<count($hari))
    {
        echo("Hari ke".($i)." adalah ". $hari[$i]."<br>");
        $i++;
    }
    ?>
</body>
</html>