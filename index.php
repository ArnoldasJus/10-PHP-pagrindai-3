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

   <form method="GET" action="index.php">
        <input id="vardas" class="vardas" name="vardas" value="<?php echo isset($_GET["vardas"]) ? $_GET["vardas"] : ""  ; ?>"  />
        <input id="slaptazodis" class="slaptazodis" name="slaptazodis" value="<?php echo isset($_GET["slaptazodis"]) ? $_GET["slaptazodis"] : ""  ; ?>" />
        <button name="patvirtinti" type="submit">Prisijungti</button>
    </form>

    <div>
        <?php 

            if(isset($_GET["patvirtinti"])) {
                $vardas = $_GET["vardas"];
                $slaptazodis = $_GET["slaptazodis"];
            
                
                if($vardas == "admin" && $slaptazodis == "123456") {
                    echo "Prisijungėte sėkmingai";
                } else {
                    echo "Įvesti duomenys neteisingi";
                }
            }
        
        ?>
    </div>

</body>
</html>