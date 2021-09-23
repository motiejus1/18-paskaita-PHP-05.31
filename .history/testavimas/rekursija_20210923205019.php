<?php 


require_once("connections.php");
//rekursine funkcija - funkcija kuri kreipiasi pati i save.

for($i = 0; $i < 5; $i++ ) {
    echo "Mano numeris:".$i; //echo yra funkcija kuri siuo atveju yra atliekama 5 kartus
} // daugiau nei viena karta pasileidziantis veiksmas


//Tam tikras ciklas/ while / ciklo kintamasis

function rekursine($i = 0) {

    $i++; //1; 2
    echo "Labas"."<br>";

    //ciklo kintamasis 5
    //5 < 5
    //false
    //funkcija pati saves nebekviecia
    if($i < 5) {
        rekursine($i);
    } else {
        echo "Rekursija baigesi. Ciklo kintamasis " .$i."<br>";
    }
};

rekursine();

//faktorialas

// !0 = 1
// !3 = 3 * 2 * 1
// !3 = 3 * !2
//!5 = 5 * !4(4 * 3 * 2 * 1)
 // !4 = 24

// !5 = 5 * 4 * 3 * 2 * 1
// !45 = 45 * 44 * 43 * ... * 1

function faktorialas($skaicius) {

    if($skaicius < 0) {
        return "Skaicius yra maziau 0"; //return sustabdo funkcija
    }

    if($skaicius == 0) {
        return 1;
    }


    $daugyba = $skaicius * faktorialas($skaicius - 1) ;//
//
    return $daugyba; //paskutinio ciklo reiksme

    // $daugyba = 4 * faktorialas(3)
    // $daugyba = 3 * faktorials(2)
    // $daugyba = 2 * faktorialas(1)
    //$daugyba = 1 * 1 = 1      


}
echo "<br>";

echo faktorialas(5);

//Medzio struktura




//Uzklausa i duomenu baze

function kategorijuMedis($tevinis_id = 0, $kategorijos_medis_masyvas = '') {

    require_once("connections.php");
    //nekeitem savo masyvo pagal tevini id.
    // paieska tevini id atlieka sql

    if(!is_array($kategorijos_medis_masyvas)) {
        $kategorijos_medis_masyvas = array();
    }


    $sql = "SELECT * FROM kategorijos WHERE tevinis_id = $tevinis_id"; // grazins paciu pirmu rekursijos veikmo momentu
    // visas tevines kategorijas

    $result = $conn->query($sql);
    $kategorijos_medis_masyvas[] = "<ul>";
        while($category = mysqli_fetch_array($result)) {
            $kategorijos_medis_masyvas[] = "<li>".$category["pavadinimas"]."</li>";
        }
    $kategorijos_medis_masyvas[] = "</ul>";

    return kategorijos_medis_masyvas
}


var_dump($kategorijuMedis);


echo "<ul>";

foreach ($kategorijuMasyvas as $kategorija) {
    echo "<li>";
    echo $kategorija["pavadinimas"];
    echo "</li>";
}

echo "</ul>"

?>


<!-- Medzio atvaizdavimai -->
<ul>
    <li>Katgeroija 1</li>
    <li>Katgeroija 2
        <ul>
            <li>Kategorija4</li>
        </ul>
    </li>
    <li>Katgeroija 3
        <ul>
            <li>
                
            Kategorija5
        
                <ul>
                    <li>Kategorija4</li>
                </ul>
            </li>
        </ul>
    </li>
</ul>