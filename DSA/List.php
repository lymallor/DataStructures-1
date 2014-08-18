<?php
include_once 'Node.php';
class LinkList{
    public $first=NULL;
    
    public function insert($data)
    {
      
        $n=new Node($data);
        if($this->first==NULL){
            $this->first=$n;
        }
        else{
            $c=  $this->first;
            while ($c->next!=NULL){
                $c=$c->next;
            }
            $c->next=$n;
        }
    }
    public function showAll()
    {
        
        if($this->first==NULL){
            echo 'list is empty'.PHP_EOL;
        }
        else {
            $c=  $this->first;
            while ($c!=NULL){
              echo $c->getData()."->";
             $c=$c->next;
            }
            echo "X".PHP_EOL;
        }
    }
    
    public function delete($d)
    {
        
        if($this->first==NULL){
            echo 'list is empty'.PHP_EOL;
        }
        else{
            $this->showAll();
            $c=  $this->first;
            $p=  $this->first;
            while ($c!=NULL && $c->getData()!=$d){
              $p=$c;
              $c=$c->next;
            }
//            if($c==NULL){
//                echo 'Not Found '.PHP_EOL;
//            }
            $p->next=$c->next;
            echo $c->getData().' is going to be deleted'.PHP_EOL;
            $c=NULL;
        }
    }
}

