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
    $atsitiktinis = rand(5,15); //
    for($j=0;$j < $atsitiktinis; $j++) {
        $kategorija[$j] = "Knyga".$i.$j;
    }
    
    $knygos[$i] = $kategorija;

}

var_dump($knygos);


?>