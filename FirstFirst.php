<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 19.08.2018
 * Time: 0:19
 */

function pars (array $array){
    for ($i = 0; $i < count($array); $i+=2){
        if ($array[$i] == 0) return;
        echo check($array[$i], $array[$i + 1]) . "\n";
    }
}

function check ($carsCount, array $cars){
    $road = [];
    $neededCar = 1;
    $firstRoadCar = 0;
    $secondRoadCar = -1;
    while ($neededCar == $carsCount) {
        if ($secondRoadCar >= 0 && $road[$secondRoadCar] == $neededCar) {
            unset($road[$secondRoadCar]);
            $secondRoadCar--;
            $neededCar++;
        } else {
            if ($cars[$firstRoadCar] == $neededCar) {
                unset($cars[$firstRoadCar]);
                $firstRoadCar++;
                $neededCar++;
            } else {
                if ($secondRoadCar >= 0 && $cars[$firstRoadCar] > $road[$secondRoadCar]) {
                    return "no";
                } else {
                    $secondRoadCar++;
                    $road[$secondRoadCar] = $cars[$firstRoadCar];
                    unset($cars[$firstRoadCar]);
                    $firstRoadCar++;
                }
            }
        }
    }
    return "yes";
}