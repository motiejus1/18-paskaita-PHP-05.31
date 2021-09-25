<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>
<body>

    <!-- Pasirinkti tik viena is galimu, checkbox nereikeitu naudoti, mes turetume
    dirbti su dizainu, kad sunaikintume daug elementu pasirinkima

    radiobutton


-->
    <!-- Pasirinkti lyti -->
    <!-- Input turi tureti varda -->

    <form action="checkbox.php" method="get">
        <input type="radio" name="lytis" value="Vyras" checked="true" /> Vyras
        <input type="radio" name="lytis" value="Moteris" /> Moteris
        <input type="radio" name="lytis" value="nenoriu_nurodyti" /> Nenoriu nurodyti
        <input type="submit" name="submit" value="submit" />
    
    </form>

    <?php 
        if(isset($_GET["submit"]))
        {
            $lytis = $_GET["lytis"];
            echo $lytis;
        } 
    
    ?>



    <!-- Kelis pasirinkimus -->
    <input type="checkbox" value="Reiksme1" checked="true" /> Reiksme
    <input type="checkbox" value="Reiksme" /> Reiksme
    <input type="checkbox" value="Reiksme" /> Reiksme
    <input type="checkbox" value="Reiksme" /> Reiksme
    <input type="checkbox" value="Reiksme" checked="true" /> Reiksme
    <input type="checkbox" value="Reiksme" /> Reiksme
    <input type="checkbox" value="Reiksme" /> Reiksme
</body>
</html>