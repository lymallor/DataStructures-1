<?php

class Node{
    public $left;
    public $right;
    public $data;
    public function __construct($d) {
        $this->data=$d;  
    }
    public function getData(){
        return $this->data;
    }
    public function setData($d){
        $this->data=$d;
    }
         
}

