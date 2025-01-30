<?php

function waifuList(string $nama,string ...$waifu): string{
    $length = count($waifu);
    $result = "pacar $nama adalah ";
    
    foreach($waifu as $index => $value){
        if($index + 1 == $length){
            $result .= "dan $value\n";
        } else {
            $result .= "$value, ";
        }
    }
    
    return $result;
}
$waifuListSaya = waifuList("yunus", "elaina", "emilia", "reina", "kumiko");
echo $waifuListSaya;