<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel administratora</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <div class="baner">
        <h3> Portal Społecznościowy - panel administratora </h3>
    </div>
    <div class="lewy">
        <h4> Użytkownicy </h4>
        <?php

        $con = new mysqli("127.0.0.1","root","","dane42");
        $res1 = ("SELECT id, imie, nazwisko, rok_urodzenia, zdjecie FROM osoby limit 30");
        $cos1 = mysqli_query($con, $res1);
        while($wiersz1=mysqli_fetch_array($cos1)){
            $wiek = 2023 - $wiersz1[3];
            echo "$wiersz1[0]. $wiersz1[1] $wiersz1[2], $wiek lat <br>";
        }
        ?>
        <a href="settings.html">Inne ustawienia</a>
    </div>
    <div class="prawy">
        <h4> Podaj id użytkownika </h4>
        <br>
        <form action="users.php" method="post">
            <input type="number" name="id">
            <input type="submit" value="ZOBACZ">
        </form>
        <br>
        <hr>
        
    </div>
    <div class="stopka">
        Stronę wykonał: Paweł Kozłowski
    </div>
</body>
</html>