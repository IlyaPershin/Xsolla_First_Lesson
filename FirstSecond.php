<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 19.08.2018
 * Time: 1:32
 */
class Queue
{
    private $queue = [];
    public function first($num){
        array_unshift($this->queue, $num);
    }

    public function second(){
        unset($this->queue[count($this->queue)-1]);
    }

    public function thrid(){
        if (count($this->queue) == 0) {
            echo "Empty!";
            return;
        }
        echo $this->queue[count($this->queue)-1];
    }
}

function pars (array $array){
    $queue = new Queue();
    for ($i = 1; $i <= $array[0]; $i++){
        if ($array[$i] === 2) {
            call_user_func(array($queue, "second"));
        } elseif ($array[$i] === 3) {
            call_user_func(array($queue, "thrid"));
        } elseif ($array[$i][0] === 1){
            call_user_func(array($queue, "first"), $array[$i][1]);
        }
    }
}