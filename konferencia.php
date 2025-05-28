<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEO</title>
</head>
<body>
<h1>Konferenciás űrlap</h1>
Adja meg a nevét:<br>   <div name='szoveg'><input type ='text' id='nev'></div>
<br><br>
Adja meg a születési dátumát:<br><input type = 'date' id='datum'> 
<br><br>
Adja meg az email címét:<br><input type='email' id='email'>
<br><br>
Adja meg a telefonszámát: <br><input type='number' id="telefonszam">
<br><br>
Adja meg a munkahelyének a nevét és címét:<br><input type='text'><input type='text' id='mh_cim'>
<br><br>
Adja meg a munkakörét, illetve beosztását:<br><input type='text' id ='kor_beoszt'>
<br><br>
Továbbá adjon meg egy arcképet, mely a rendezvényre szóló belépőkártyán fog majd szerepelni: <br><input type='file' id ='kep'>
<br><br>
<input type="submit" value="Adatok mentése">
    
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $nev = $_POST['nev'];
    $szul_datum = $_POST['datum'];
    $email = $_POST['email'];
    $telefon = $_POST['phone'];
    $cegnev = $_POST['companyName'];
    $cegcim = $_POST['companyAddress'];
    $munka = $_POST['jobTitle'];

    // A fájl, ahova menteni szeretnénk
    $file = 'adatok.txt';

    // Formázott adatokat a fájlba írjuk
    $content = "
    Név: $name
    Születési dátum: $datum
    Email: $email
    Telefonszám: $phone
    Munkahely neve: $companyName
    Munkahely címe: $companyAddress
    Munkakör/beosztás: $jobTitle

    -------------------------
    ";

    // Adatok hozzáadása a fájlhoz
    file_put_contents($file, $content, FILE_APPEND);

    echo "Az adatok sikeresen elmentésre kerültek!";
}
?>

<style>
body{
    margin:50px;
}
#szoveg{
    float:right;

}

</style>