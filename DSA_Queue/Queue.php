<?php

    class Queue{
        public $queue;
        public $currentIndex;
        public $size;
        public $extractor;
        public function __construct($size) {
            $this->size=$size;
            $this->queue=array();
            $this->currentIndex=0;
            $this->extractor=0;
        }
        public function enQueue($d){
           // echo 'called'.  count($this->queue).' '.$this->size;
            if(count($this->queue)==$this->size){
                echo 'Queue is full'.PHP_EOL;
            }
            else{
              //  echo $d.' is going to be added'.PHP_EOL;
                $this->queue[$this->currentIndex]=$d;
                $this->currentIndex++;
            }
        }
        public function deQueue(){
            if($this->currentIndex==0){
                echo 'Queue is empty'.PHP_EOL;
            }
            else {
                return $this->queue[$this->extractor];
                $this->extractor++;
            }
        }
        public function showAll(){
            for($i=$this->currentIndex-1 ; $i>=0; $i--){
                echo $this->queue[$i].',';
            }
            echo PHP_EOL;
        }
    }

