<?php 

for ($i = 2 ; $i <= 10 ; $i += 2){ 
    echo $i ."<br>";
}

$i = 1 ;

while ($i <= 5){
    echo $i . "<br>";
    $i++;
}

$languages = ["PHP","JavaScript","Python","Java"];
foreach ($languages as $language){
    echo $language . "<br>";
}

