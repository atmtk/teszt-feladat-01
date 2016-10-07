<?php

/**
 * Feladat 02:
 * A kapcsolat.csv fileból olvasd be a sorokat egy-egy asszociatív tömbbe.
 *
 * Az asszociatív tömböket pedig sorban rakd bele a $csvLines-ba.
 * Az első sort a $csvLines[0]-ba, a második sort a $csvLines[1]-be, ...
 *
 * A kapcsolat.csv filet nem módosíthatod, csak ezt a filet szerkeszd.
 */

$csvLines = array();// ebbe töltsd be a kapcsolat.csv file sorait

// innentől lefelé írd be a te kódodat



// a végén ezzel irasd ki az eredményt
var_dump($csvLines);

// innentől lefelé már ne módosítsd a filet, ez fogja kiírni, hogy jó-e a megoldásod (csak az első sort checkolja)

// például az első sor így kellene, hogy kinézzen:
$line0 = array(
    'term_id1'      => '18863',
    'term_id2'      => '50665',
    'tipus'         => 'Együtt felhasználásra ajánlott',
    'megjegyzes'    => 'Élzárás amelyet, rendelésre elkészítünk!',
);

if ($line0 == $csvLines[0])
{
    var_dump("Siker! Az első sor biztos jó, reméljük, hogy a többi is. :)");
}
else
{
    var_dump("Valami még nem stimmel.");
}
