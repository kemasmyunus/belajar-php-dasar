<?php

function waifuList($nama, ...$waifu){
    $length = count($waifu);
    echo "pacar $nama adalah ";
    foreach($waifu as $index => $value){
        if($index + 1 == $length){
            echo "dan $value\n";
        }else{
            echo "$value, ";
        }
    }
}
waifuList("yunus", "elaina", "emilia","reina", "kumiko");