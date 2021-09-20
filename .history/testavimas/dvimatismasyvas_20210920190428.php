<?php 
// . Sukurti dvimatį masyvą, kuriame būtų informacija apie knygos kategoriją, bei knygos priklausančios kategorijai.
// Masyvo struktūrą sugalvoti patiems. Testavimui sukurti bent 5 kategorijas, kurios turi nuo 5 iki 15 knygų.



//

$knygos = [];

//uz kategorijas
for($i=0; $i < 5; $i++) {

    // $kategorija = "Kategorija".$i;
    $kategorija = [];
    //atsakingas uz knygas
    $atsitiktinis = rand(5,15); //6
    for($j=0;$j < $atsitiktinis; $j++) {
        $kategorija[$j] = array(
            "pavadinimas" => "Knyga".$i.$j,
            "autorius" => "Autorius".$j,
            "kategorija" => "kategorija".$i
        );
        
    }
    
    $knygos["kategorija".$i] = $kategorija;

}

// var_dump($knygos);




// 1 budas
echo "<table>";
for ($i=0; $i < count($knygos); $i++)  { //einame per kategorijas
    // kiek is viso yra ketegoriju
    // var_dump($knygos["kategorija".$i]); //masyvas

    for($j=0; $j< count($knygos["kategorija".$i]); $j++ ) { //einame per knygas, 
        //eilute lentelele -> 1 duomenu bazes irasas
        echo "<tr>";
            echo "<td>".$knygos["kategorija".$i][$j]["pavadinimas"]."</td>";
            echo "<td>".$knygos["kategorija".$i][$j]["autorius"]."</td>";
            echo "<td>".$knygos["kategorija".$i][$j]["kategorija"]."</td>";
        echo "</tr>";
    }

}
echo "</table>";

// 2 budas foreach ciklas

foreach ($knygos as $kategorija) {

    foreach()

}

?>