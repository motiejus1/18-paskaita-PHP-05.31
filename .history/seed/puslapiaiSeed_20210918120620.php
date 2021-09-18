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

    function randomText($n) {
        $text = "";


        for($i = 0; $i < $n ; $i++) {
            $randomNumber = rand();
            $hashedText = md5($randomNumber);
            $text .= $hashedText;
        }
        
        echo $text;

    }

    randomText();


    if(isset($_GET["submit"])) {
        for ($i=0; $i<50; $i++) {

            $pavadinimas = "pavadinimas".$i;
            $nuoroda = "nuoroda".$i;
            $turinys = rand(1, 4);
            $santrauka = "santrauka".$i;
            $kategorijos_id = rand(1, 4);


            $sql = "INSERT INTO `puslapiai`(`pavadinimas`, `nuoroda`, `turinys`, `santrauka`, `kategorijos_id` ) 
            VALUES ('$pavadinimas','$nuoroda','$turinys', '$santrauka', '$kategorijos_id')";

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