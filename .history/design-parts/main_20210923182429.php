
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
           echo "<li>";

                echo "<a>";
                echo $category["pavadinimas"];
                echo "/"
           echo "</li>";
        }

        echo "</ul>"
    ?>

    </div>
    <div class="col-lg-9">
        <div class="row">
        <?php 

            $sql = "SELECT * FROM puslapiai
            ORDER BY puslapiai.ID DESC
            ";

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