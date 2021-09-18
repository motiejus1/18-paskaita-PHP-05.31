<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puslapiu generavimas</title>
</head>
<body>
    <form action="" method="get">
        <button type="submit" name="submit">Sukurti puslapius</button>
    </form>
    <?php 

    require_once("../connections.php");

    if(isset($_GET["submit"])) {
        for ($i=0; $i<50; $i++) {

            $pavadinimas = "pavadinimas".$i;
            $nuoroda = "nuoroda".$i;
            $turinys = rand(1, 4);
            $santrauka = "santrauka"$i;
                
            $sql = "INSERT INTO `imones`(`pavadinimas`, `aprasymas`, `tipas_ID`) 
            VALUES ('$pavadinimas','$aprasymas','$tipas_id')";

            if(mysqli_query($conn, $sql)) {
                echo "Vartotojas sukurtas sekmingai";
                echo "<br>";
            } else {
                echo "Kazkas ivyko negerai";
                echo "<br>";
            }
        }
    }

?>
</body>
</html>