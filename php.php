<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_print</title>
    <style>
        table, td{
            border: black 1px solid;
        }
    </style>
</head>
<body>
    <?php
        var_dump($_POST); // print całego post'a w postaci array
        echo "<br>";

        $rek1 = $_POST['rek1'];
        $rek2 = $_POST['rek2'];
        $radio = isset($_POST['radio']) ? $_POST['radio'] : 0; // jeżeli radio nie zaznaczone wstaw 0
        $select = isset($_POST['ok']) ? 1 : 0; // jeżeli checkbox nie zaznaczony wstaw 0, jeśli zaznaczony wstaw 1

        echo "| rek1: $rek1 | rek2: $rek2 | radio: $radio | select: $select |<br><hr><h2>Odebrane z bazy</h2>";

        $p = mysqli_connect('localhost', 'root', '', 'test'); // nawiązanie połączenia z DB

        $sql = "INSERT INTO spr_php (rek1, rek2, radio, checkbox)
                VALUES ('$rek1', '$rek2', '$radio', '$select')"; // zapytanie do DB

        if(mysqli_query($p, $sql)){     // print errora z DB
            echo "zapytanie powiodło się";
        }
        else{
            echo "nie udało się wykonać zapytania";
        }

        mysqli_close($p);   // zamknięcię połączenia z DB

        //--------------------------------------

        $p = mysqli_connect('localhost', 'root', '', 'test');
        
        $sql1 = "SELECT rek1, rek2, radio, checkbox FROM spr_php";
        $result = mysqli_query($p, $sql1);  // przekierowanie zapytania do zmiennej "result"

        echo "<table>";
        echo "<tr><th>rekord1</th><th>rekord2</th><th>radio</th><th>checkbox</th></tr>";
        while($x=mysqli_fetch_array($result)){ // x -> kolumna w bazie  |  odebranie wszystkich zapytań z bazy i wyświetlenie ich
            echo "<tr>";
            echo "<td>" . $x[0] . "</td>";
            echo "<td>" . $x[1] . "</td>";
            echo "<td>" . $x[2] . "</td>";
            echo "<td>" . $x[3] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        mysqli_close($p);
    ?>
</body>
</html>