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
$tab1=array();
$tab1['cle']="bonjour";
$tab1[2]="les ";
$tab1[0]="amis";
foreach($tab1 as $valeur){
    echo  $valeur;
}
$tab2=array("un"=>254,"deux"=>789,"trois"=>"bolbol");
foreach($tab2 as $cle=>$val){
    echo"<br>tab2[$cle]:$val<br>";  
}

echo" <br>$a $hello";
    ?>
    
</body>
</html>