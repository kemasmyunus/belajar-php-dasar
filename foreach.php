<?php

$names = ["kemas", "elaina", "mikasa"];
foreach($names as $name){
    echo "nama orang ke adalah $name\n";
};

$char = [
    "elaina" => ["cinta" => "yunus"],
    "emilia" => ["cinta" => "yunus"],
    "yukina" => ["cinta" => "yunus"],
];

$no = 1;
foreach ($char as $name => $values) {
    foreach ($values as $key2 => $value) {
        echo "Nama orang ke-$no adalah $name, $value\n";
        $no++;
    }
}
?>
