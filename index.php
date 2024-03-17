<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$a="hello";
$$a="world";
$tab[0]=25;
$tab[1]=3;
$tab[2]=55;
for ($i=0; $i <3 ; $i++) { 
   echo "<br>"."tab[$i]=".$tab[$i];
}
echo "<br>";
$tab1=array(
    "cle"=>"bonjour",
      2=>"lessss ",
      0=>"amis"
);

foreach($tab1 as $valeur){
    echo  $valeur;
}
echo "<br>";
$tab2=array(
    "un"=>254,
    "deux"=>789,
    "trois"=>"bolbol"
);
foreach($tab2 as $cle=>$val){
    echo  "<br>".$cle."==>".$val;  
}

echo "<br>";
$tab3=array(
    "bilel"=>25,
    "hanen"=>33,
    "saif"=>31,
);
foreach($tab3 as $nom => $age){
    echo "<br>" . $nom . "-->" . $age;
}
echo "<br>";
$tab4=array(
    "bolbol"=>"master",
    "hanen"=>"license",
    "saif"=>"bts",
    "aymen"=>"lysee",
    "houssem"=>"college"
);
echo "les nombres de personne est ".count($tab4)."element's:";


foreach ($tab4 as $nom => $education){
    echo  "<br>". $nom. "==>" .$education;

}
echo "<br>";
$i=3;
while ($i<5) {
    echo $i."<br>";
    $i++;
}
$j=5;
do {
    echo $j."<br>";
    $j++;
} while ($j < 10);
    ?>
    
</body>
</html>