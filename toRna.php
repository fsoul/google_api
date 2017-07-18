<?php
/**
 * Created by PhpStorm.
 * User: bilinskyi
 * Date: 17.07.17
 * Time: 17:08
 */



function toRna($dna){
    $len = strlen($dna);
    $res = null;
    $arr = array(
        "G" => "C",
        "C" => "G",
        "T" => "A",
        "A" => "U",
    );
    for($i=0; $i<$len; $i++){
        $res .= $arr[$dna[$i]];
    }

    return $res;
}


echo(toRna('ACGTGGTCTTAA'));
echo '<br>';
echo 'UGCACCAGAAUU' === toRna('ACGTGGTCTTAA');
