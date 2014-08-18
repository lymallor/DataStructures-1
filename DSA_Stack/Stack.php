<?php

class Stack{
    public $size;
    public $stack;
    public $indexCurrent;
    public function __construct($size) {
        $this->size=$size;
        $this->stack=array();
        $this->indexCurrent=0;
    }
    public function push($d){
        if(count($this->stack)==$this->size){
            echo 'Stack is full'.PHP_EOL;
        }
        else{
        //    echo $d. 'this is going to be pushed'.PHP_EOL;
            array_push($this->stack, $d);
            $this->indexCurrent++;
        }
    }
    public function pop(){
        if($this->indexCurrent==0){
            echo 'Stack is empty'.PHP_EOL;
        }
        else {
            
            $this->indexCurrent--;
            echo $this->stack[$this->indexCurrent].' POPED'.PHP_EOL;
            return $this->stack[$this->indexCurrent];
         //   $this->indexCurrent--;
        }
    }
    public function showAll(){
        echo $this->indexCurrent.'  are total values'.PHP_EOL;
        for ($i=$this->indexCurrent-1;$i>=0;$i--){
            echo '|'.$this->stack[$i].'|'.PHP_EOL;
        }
        echo '\'\'\''.PHP_EOL;
    }
}

