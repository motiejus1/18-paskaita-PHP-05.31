
<?php require_once("connections.php"); ?>

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
            <a href="<?php echo $pages["pavadinimas"]; ?>" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

<?php } ?>

<div class="row">
            <div class="col-lg-3">
                <h3>Šoninė juosta/Sidebar</h3>
            </div>
            <div class="col-lg-9">
            <div class="row">    
            </div>
            </div>
        </div>