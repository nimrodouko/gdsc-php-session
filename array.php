<?php
$marks = [40,60,67,20]
$names = ["Nimrod","Derrick"]

echo '<pre>';
var_dump($marks);
echo '</pre>';

//add elemrnt 
array_push($marks,80);
array_unshift($marks,20);
array_pop($marks,60);
array_shift($marks);

//associative array
$person =[
    'name' => 'Nimrod';
    'age' => 80;
]



?>