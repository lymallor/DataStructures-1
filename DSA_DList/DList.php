<?php
require_once 'Node.php';
class DList{
    public $first;
    
    public function insert($d){
        $n=new Node($d);
        if($this->first==NULL){
            $this->first=$n;
        }
        else{
            $c=  $this->first;
            while($c->next!=NULL){
                $c=$c->next;
            }
            $c->next=$n;
            $n->prev=$c;
                    
        }
            
    }
    public function delete($d){
        if($this->first==NULL){
            echo 'DList is empty'.PHP_EOL;
        }
        else {
            $c=  $this->first;
            $p=  $this->first;
            while($c->next!=NULL && $c->getData()!=$d){
                $p=$c;
                $c=$c->next;
            }
            if($c->next==NULL){
                echo 'Not Found'.PHP_EOL;
            }
            else{
                $p->next=$c->next;
                $c->next->prev=$p;
                echo $c->getData().' Delete'.PHP_EOL;
                $c=NULL;
            }
                    
        }
    }
    public function showAll(){
        $c=  $this->first;
        while($c->next!=NULL){
            echo $c->getData().'<>';
            $c=$c->next;     
        }
        echo $c->getData().PHP_EOL;
            
    }
}

