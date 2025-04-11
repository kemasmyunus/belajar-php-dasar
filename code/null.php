<?php
$char = [
    "elaina" => ["cinta" => "noah"],
    "mikasa" => ["cinta" => null], //tydak happy ending
    "emilia" => ["cinta" => "subaru"],
    "shiina" => ["cinta" => "sorata"],
    "reina" => ["cinta" => "taki"]
];

foreach ($char as $nama => $detail) {
    $cinta = $detail["cinta"] ?? "yntkts";
    if($cinta != "yunus"){
        echo "Cinta dari $nama adalah yunus\n";
    }else{
        echo "Cinta dari $nama adalah $cinta\n";
    }
}
