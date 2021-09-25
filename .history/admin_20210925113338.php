
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


                $checked = array(0,0,0);
                
                if($selected_value[0] == 0) {
                    $checked[0] = "checked";
                } else if ($selected_value[0] == 1) {
                    $checked[1] = "checked";
                } else if ($selected_value[0] == 2) {
                    $checked[2] = "checked";
                }  


            
            ?>
            <input type="radio" name="sidebar" value="0" <?php echo $checked[0]; ?>/> Sidebar neatvaizduojamas </br>
            <input type="radio" name="sidebar" value="1" <?php echo $checked[1]; ?>/> Sidebar kaireje </br>
            <input type="radio" name="sidebar" value="2" <?php echo $checked[2]; ?>/> Sidebar desineje </br>
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
                header("Location: admin.php");
            } else {
                echo "Kažkas įvyko negerai";
            }
        
        }

        ?>

        <h2> Kategoriju atvaizdavimas </h2>
        <form action="admin.php" method="get">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Pavadinimas</th>
                    <th>Aprasymas</th>
                    <th>Rodyti</th>
                </tr>
            <?php 
            $sql = "SELECT * FROM kategorijos"; //kuri kategorija yra tevine/ kuri vaikine
            $result = $conn->query($sql);

            while($category = mysqli_fetch_array($result)) {
                $categoryID = $category["ID"];
                echo "<tr>";
                    echo "<td>".$category["ID"]."</td>";
                    echo "<td>".$category["pavadinimas"]."</td>";
                    echo "<td>".$category["aprasymas"]."</td>";

                    if($category["rodyti"] == 0) {
                        echo "<td>
                            <input type='checkbox' value='$categoryID' name='category[]'/> 
                            <input type='text' name='category$categoryID'  value='$categoryID' />
                        </td>";
                    } else {
                        echo "<td><input type='checkbox' value='$categoryID' name='category[]' checked='true'/> 
                        <input type='text' name='category$categoryID'  value='$categoryID' />
                        </td>";
                        
                    }

                    
                echo "</tr>";

            }
            
            ?>
            </table>
            <input type="submit" name="submit1" value="Išsaugoti"/>
        </form>

        <?php 
        if(isset($_GET["submit1"])) {

            // 1 atvaizduoja 0 paslepia
            //jeigu egzistuoja masyve, vadinasi checkobx pazymeta, vadinasi turi buti 1
            //jeigu masyve neegzistuoja, vadinasi checkbox kategorija nepazymeta, vadinasi turi buti 0
            $reiksmes = $_GET["category"];
            var_dump($reiksmes);

            foreach ($reiksmes as $reiksme) {
                $sql = "UPDATE `kategorijos` SET `rodyti`= 1 WHERE ID=$reiksme";
                $result = $conn->query($sql)
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