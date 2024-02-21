<?php

// Déclaration du tableau Mod_Niv
$Mod_Niv = array(
    'Module1' => 'N2TR1-S1',
    'Module2' => 'N2TR2-S1',
    'Module3' => 'N2TR1-S2',
    'Module4' => 'N2TR1-S1',
    'Module5' => 'N2TR2-S2',
    'Module6' => 'N2TR2-S1',
    'Module7' => 'N2TR1-S1',
);


echo "Le tableau a " . count($Mod_Niv) . " élément(s):" ;


foreach ($Mod_Niv as $module => $classe) {
    echo "<br> " . $module . " ---> " . $classe ;
}

?>