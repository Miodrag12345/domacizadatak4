<?php

$ime = "Toma" ;

if ($ime == "Toma ")
{
    echo "Dobrodosao " ;
}
else if ($ime == "Petar")
{
    echo "Dobrodosao" ;
}
else 
{
    echo "Niste Toma ili Petar";
}

// 2 nacin//

if ($ime == "Toma" || "Petar") // ili 
{
    echo "Dobrodosao ";
}

else {
    echo "Niste Toma ili Petar";
}

?>
