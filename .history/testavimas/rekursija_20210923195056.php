<?php 

//rekursine funkcija - funkcija kuri kreipiasi pati i save.

for($i = 0; $i < 5; $i++ ) {
    echo "Mano numeris:".$i; //echo yra funkcija kuri siuo atveju yra atliekama 5 kartus
} // daugiau nei viena karta pasileidziantis veiksmas


//Tam tikras ciklas/ while / ciklo kintamasis

function rekursine($i = 0) {

    $i++; //1; 2
    echo "Labas";

    //ciklo kintamasis 5
    
    if($i < 5) {
        rekursine($i);
    } else {
        echo "Rekursija baigesi. Ciklo kintamasis " .$i;
    }
     // rekursine(1)
    //rekursine(2)
    //rekursine(3)
    //rekursine(4);
    //...
};

rekursine();

?>