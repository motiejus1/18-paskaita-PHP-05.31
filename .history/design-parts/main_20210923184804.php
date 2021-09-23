
<?php require_once("connections.php"); ?>



<div class="row">
    <div class="col-lg-3 sidebar">
        <h3>Šoninė juosta/Sidebar</h3>
    <?php 
        $sql = "SELECT * FROM kategorijos
        ORDER BY pavadinimas ASC
        ";

        $result = $conn->query($sql);

        echo "<ul>";

        while($category = mysqli_fetch_array($result)) {
           //kiek kategorija turi irasu?
           // atlikti uzklausa i puslapiai duomenu bazes lenteleje
           
           //kategorijos ID. $catID - jis ateina is nuorodos
           
           $categoryID = $category["ID"]
           
           $sql1 = "SELECT COUNT(ID) AS viso_irasu FROM `puslapiai` WHERE kategorijos_id = ";

           echo "<li>";

                echo "<a href='index.php?catID=".$category["ID"]."'>";
                    echo $category["pavadinimas"];
                echo "</a>";
           echo "</li>";
        }

        echo "</ul>"
    ?>

    </div>
    <div class="col-lg-9">
        <div class="row">
        <?php 

            if(isset($_GET["catID"]) && !empty($_GET["catID"])) { //egzistuoja
                $catID = $_GET["catID"];
                
                $sql = "SELECT * FROM puslapiai
                WHERE kategorijos_id = $catID
                ORDER BY puslapiai.ID DESC
                ";
            } else {
                $sql = "SELECT * FROM puslapiai
                ORDER BY puslapiai.ID DESC";
            }

            $result = $conn->query($sql);

            while($pages = mysqli_fetch_array($result)) {
            ?>
            <div class="card col-lg-4" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $pages["pavadinimas"]; ?></h5>
                    <p class="card-text"><?php echo $pages["santrauka"]; ?></p>
                    <a href="puslapiai.php?href=<?php echo $pages["nuoroda"]; ?>" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <?php } ?>    
        </div>
    </div>
</div>