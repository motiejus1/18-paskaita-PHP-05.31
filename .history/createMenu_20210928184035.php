<?php require_once("connections.php"); ?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meniu create</title>
    <?php require_once("includes.php"); ?>
</head>
<body>
    <div class="container">
    <?php require_once("design-parts/meniu.php"); ?>
        <?php require_once("design-parts/jumbotron.php"); ?>
        <?php showJumbotron("Create meniu", "Create your own meniu"); ?>


        <form action="createMenu.php" method="get">
            <input type="radio" name="menuType" value="1" checked="true"> Pasirinktinė nuoroda <br>
            <input type="radio" name="menuType" value="2"> Nuoroda į kategoriją <br>
            <input type="radio" name="menuType" value="3"> Nuoroda į puslapį <br>
            <input type="submit" name="submit" value="Create">
        </form>

        <?php 
            if(isset($_GET["submit"])) {
                $menuType = $_GET["menuType"]; // 1 -pasirinktine nuorda , 2 - kategorijis, 3 - puslapiai ?>
                <?php if($menuType == 1) { ?>
                    <h2> Pasirinktinė forma </h2>
                    <form action="createMenu.php" method="get">

                        <input class="form-control" type="text" name="pavadinimas" placeholder="Įveskite pavadinimą">
                        <input class="form-control" type="text" name="nuoroda" placeholder="">
                        <input class="form-control" type="text" name="target">
                        <input class="form-control" type="text" name="alt">
                        <input class="btn btn-primary" type="submit" name="create" value="create">                        
                    </form> 
                <?php } else if($menuType == 2) { ?>
                    <h2> Nuoroda į kategoriją </h2>
                    <form action="createMenu.php" method="get">                        
                    </form> 
                <?php } else if($menuType == 3) {?>
                    <h2> Nuoroda į puslapį </h2>
                    <form action="createMenu.php" method="get">                        
                    </form> 
                <?php } ?>        
        <?php } ?>





        <?php 
        //Pasirinktine nuoroda
        //Nuoroda i kategorija
        //Nuoroda i puslapi
        
        //su insert tiesiog paprastai uzpildome - forma     
        //kategorijos - lieka uzpildyti tik target ir alt - forma 2
        //puslapiai - lieka uzpildyti tik target ir alt - forma 3



        ?>



    </div>
</body>
</html>