<?php

$automobili = ["Golf 1","Golf 2" , "Golf3"];

if (in_array("Golf 2", $automobili))
{
    echo "Nasli smo najboljeg golfa";
}

$pronadjenAuto= in_array ("Golf 2" ,$automobili);
if ($pronadjenAuto)
{
    echo "Nasli smo najboljeg golfa ";
}


?>