
<?php require_once("connections.php"); ?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <?php require_once("includes.php"); ?>
</head>
<body>
<div class="container">
        <?php require_once("design-parts/meniu.php"); ?>
        <?php require_once("design-parts/jumbotron.php"); ?>
        <?php showJumbotron("Admin", "Admin page"); ?>
        

        <h2>Sidebar atvaizdavimas </h2>
        <form action="admin.php">
            <?php 
                $sql = "SELECT reiksme FROM nustatymai WHERE ID = 1 "; // 1 irasas
                $result = $conn->query($sql);

                $selected_value = mysqli_fetch_array($result);

                var_dump($selected_value);

                if($se)

            
            ?>
            <input type="radio" name="sidebar" value="0" <?php echo $cheked[0]; ?>/> Sidebar neatvaizduojamas </br>
            <input type="radio" name="sidebar" value="1" <?php echo $cheked[1]; ?>/> Sidebar kaireje </br>
            <input type="radio" name="sidebar" value="2" <?php echo $cheked[]; ?>/> Sidebar desineje </br>
            <input class="btn btn-primary" type="submit" name="submit" value="Išsaugoti">
        </form>
        
        <?php 
        // 0 reiks kad sidebar neatvaizduojamas
        // 1 reiks kad sidebar yra kaireje puseje
        // 2 reiks kad sidebar yra desineje puseje
        if(isset($_GET["submit"])) {
            
            $sidebar = $_GET["sidebar"];

            $sql = "UPDATE `nustatymai` SET `reiksme`='$sidebar' WHERE ID = 1";
            $result = $conn->query($sql);

            if($result) {
                echo "Nustatymas pakeistas sėkmingai";
            } else {
                echo "Kažkas įvyko negerai";
            }
        
        }


        
        ?>
    </div>
</body>
</html>






<?php 

//1. Sonines juostos atvaizdavimas
// Sonine juosta kaireje puseje
// Sonine juosta desineje puseje
// Sonines juostos neatvaizduoti

//2. Kategoriju matomumas
// Kad mes galetume pasirinkti, kurias kategorijas norime matyti, kuriu ne



?>