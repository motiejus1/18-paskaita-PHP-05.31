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
        
        <form action="admin.php">
            <input class="form-control" type="radio" name="sidebar" value="0"/>Sidebar neatvaizduojamas </br>
            <input type="radio" name="sidebar" value="1"/>Sidebar kaireje </br>
            <input type="radio" name="sidebar" value="2"/>Sidebar desineje </br>
            <input type="submit" name="submit" value="Išsaugoti">
        </form>
        
        <?php 
        // 0 reiks kad sidebar neatvaizduojamas
        // 1 reiks kad sidebar yra kaireje puseje
        // 2 reiks kad sidebar yra desineje puseje



        
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