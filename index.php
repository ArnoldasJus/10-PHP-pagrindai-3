<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 3. Sukurkite du input laukelius. Vienas -  vardas, kitas - slaptažodis. Susigalvokite vardą ir slaptažodį. Pvz. vardas - "admin",
slaptažodis - "123456". Jei sugalvota kombinacija sutampa su tuo, kas įvesta į input laukelius, išvedamas pranešimas - "prisijungėte sėkmingai", kitu atveju - "Įvesti duomenys neteisingi". -->

<!-- 4. Papildikite 3 programą:
   *Jei duomenys yra įvesti teisingi, vartotojas nukreipiamas į failą - manopaskyra.php.
   *Kitu atveju, vartotojas nukreipiamas į puslapį - 404.php -->

   <form method="POST" action="index.php">
        <input name="vardas">
        <input name="slaptazodis" type="password">
        <button name="patvirtinti" type="submit">Prisijungti</button>
    </form>

    <div>
        <?php 

            $vardas = 'admin';
            $slaptazodis = '123456';

            if(isset($_POST["patvirtinti"])) {
                $input_vardas = $_POST["vardas"];
                $input_slaptazodis = $_POST["slaptazodis"];
            
                
                if($input_vardas == $vardas && $input_slaptazodis == $slaptazodis) {
                    //echo "Prisijungėte sėkmingai";
                    // nukreipimas i mano paskyra.php
                    header('Location: manopaskyra.php');
                } else {
                    //echo "Įvesti duomenys neteisingi";
                    // nukreipimas i 404
                    header('Location: 404.php');
                }
            }
        
        ?>
    </div>

</body>
</html>