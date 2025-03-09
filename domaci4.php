<?php

// domaci zadatak 1

$ime= "adminstrator";
$lozinka= "mojaSifraJeSigurna";

if (strtolower ($ime) == "adminstrator" || $lozinka == "mojaSifraJeSigurna")
{
    echo "Dobrodosao administratore";
}

else{
    echo "Pogresno korisnicko ime ili lozinka " ;
}


?>

<?php
 // zadatak 2 //

 $sat = date("G");
 if ($sat > 5 ||  $sat > 12)
 {
    echo "Dobro Jutro";
 }
 elseif ($sat > 12 || $sat <20)
 {
    echo "Dobar dan";
 }
 else {
    echo "Dobro vece";
 }
 




