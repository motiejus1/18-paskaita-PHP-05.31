<?php 

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

// !3 = 3 * 2 * 1
// !5 = 5 * 4 * 3 * 2 * 1
// !45 = 45 * 44 * 43 * ... * 1

function faktorialas() {

}

faktorialas()



?>