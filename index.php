<?php

$ime = "Toma";
$godine= 29;
$visina=181;

if ($ime == "Toma") 
{
    echo "Pozdrav Tomo !";
}

if ($godine == 18)
{
    echo"Imate 18 godina";
}

else if($godine == 29)
{
    echo "Imate 29 godina";
}

if($visina < 170)
{echo "Niski ste";
}
else 
{
    echo "Visoki ste";
}


$godinaRodjenja = 1993;

 
if ($godinaRodjenja == 1992) {
    echo "Imate 31 godinu";
}

else if($godinaRodjenja == 1999) {
    echo "Imate 26 godina";
}
else {
    $trenutnaGodine= date("Y")-$godinaRodjenja;
    echo "Imate $trenutnaGodine";
}

