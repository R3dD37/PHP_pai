<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nazwa = "Hello World"; #zmienna
    print("$nazwa taka"); #wyświetlanie zamiennie echo('Tekst');
    $cos = "a tak jakis";
    echo($nazwa." ".$cos);
    /*
        Komentarze dokładnie takie jak w js
    */

    define("CONSTANT", "STAŁA"); #deklaracja stałej
    echo(CONSTANT);

    $conn = new mysqli('localhost', 'root', '');

    if ($conn -> connect_error) {
        echo("Connect error");
    } else {
        echo("Connect succes");
    }
    $sql = "SELECT * FROM users;";
    $array = array(1, 5, 2);
    sort($array);

    for ($i=0; $i < ob_get_length($array); $i++) { 
        echo($array[$i]);
    }
    $ocena = 5;
    
    round($ocena, 2);

    switch ($ocena) {
        case "":
            echo("0-50");
            break;
        case 2:
            break;
        default:
            # code...
            break;
    }
    ?>
</body>
</html>