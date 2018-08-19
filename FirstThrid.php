<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 19.08.2018
 * Time: 13:00
 */

function pars (array $array){
    for ($i = 1; $i <= $array[0]; $i++){
        echo gmp_strval(gmp_fact($array[$i])) . "\n";
    }
}