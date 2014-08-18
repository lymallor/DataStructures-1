<?php

require_once 'Node.php';

class Tree {

    public $root;

    public function __construct($d) {
        $this->root = new Node($d);
        echo 'Root Node ' . $this->root->getData() . PHP_EOL;
    }



    public function insert($d,$root) {
        $n = new Node($d);
        if ($n->getData() > $root->getData()) {
            if ($root->right == NULL) {
                echo $n->getData() . ' added at the right of ' . $root->getData() . PHP_EOL;
                $root->right = $n;
            } else {
                $this->insert($d, $root->right);
            }
        } elseif ($n->getData() <= $root->getData()) {
            if ($root->left == NULL) {
                echo $n->getData() . ' added at the left of ' . $root->getData() . PHP_EOL;
                $root->left = $n;
            } else {
                $this->insert($d, $root->left);
            }
        }
    }

    public function search($key,$root) {
        if($key == $this->root->getData()){
            echo 'Found'.PHP_EOL;
        }
        elseif ($key<=$root->getData()) {
            $this->search($key, $root->left);
        }
        elseif ($key>$root->getData()) {
            $this->search($key, $root->right);
        }
        else{
            echo 'NOT FOUND'.PHP_EOL;
        }
    }
    
    public function printPrePrder($root){
        if($root!=NULL){
            echo $root->getData().' ';
            $this->printPrePrder($root->left);
            $this->printPrePrder($root->right);
        }
    }
    
    public function printPostPrder($root){
        if($root!=NULL){
            $this->printPrePrder($root->left);
            $this->printPrePrder($root->right);
            echo $root->getData().' ';
        }
    }
    
    public function printInPrder($root){
        if($root!=NULL){
            $this->printPrePrder($root->left);
            echo $root->getData().' ';
            $this->printPrePrder($root->right);
            
        }
    }
    public function findSmallest($root){
        if($root!=NULL){
            while ($root->left!=NULL){
                $root=$root->left;
            }
            echo $root->getData().PHP_EOL;
        }
    }

    public function findLargest($root){
        if($root!=NULL){
            while ($root->right!=NULL){
                $root=$root->right;
            }
            echo $root->getData().PHP_EOL;
        }
    }
}
