<?php 

//rekursine funkcija - funkcija kuri kreipiasi pati i save.

for($i = 0; $i < 5; $i++ ) {
    echo "Mano numeris:".$i; //echo yra funkcija kuri siuo atveju yra atliekama 5 kartus
} // daugiau nei viena karta pasileidziantis veiksmas


//Tam tikras ciklas/ while / ciklo kintamasis

function rekursine($i = 0) {

    $i++;
    echo "Labas";//Paraso teksta labas
    rekursine($i); //Pati save
};

rekursine();

?>