<?php

class Node{

    public $next;

    public $data;


    public function __construct($data){
     //   echo 'Constructor'.PHP_EOL;
        $this->data=$data;
    }
    
    public function getData(){
        return $this->data;
    }


}

