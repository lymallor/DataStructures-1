<?php

require_once 'Node.php';

class Tree {

    public $root;

    public function __construct($d) {
        $this->root = new Node($d);
        echo 'Root Node ' . $this->root->getData() . PHP_EOL;
    }

    public function insert($d, $root) {
        $n = new Node($d);
        if ($n->getData() > $root->getData()) {
            if ($root->right == NULL) {
                echo $n->getData() . ' added at the' .
                ' right of ' . $root->getData() . PHP_EOL;
                $root->right = $n;
            } else {
                $this->insert($d, $root->right);
            }
        } elseif ($n->getData() < $root->getData()) {
            if ($root->left == NULL) {
                echo $n->getData() . ' added at the left of'
                . ' ' . $root->getData() . PHP_EOL;
                $root->left = $n;
            } else {
                $this->insert($d, $root->left);
            }
        }
    }

    public function search($key, $root) {
        if ($key == $root->getData()) {
            echo 'Found' . PHP_EOL;
        } elseif ($key <= $root->getData()) {
            $this->search($key, $root->left);
        } elseif ($key > $root->getData()) {
            $this->search($key, $root->right);
        } else {
            echo 'NOT FOUND' . PHP_EOL;
        }
    }

    public function printPreOrder($root) {
        if ($root != NULL) {
            echo $root->getData() . ' ';
            $this->printPreOrder($root->left);
            $this->printPreOrder($root->right);
        }
    }

    public function printPostOrder($root) {
        if ($root != NULL) {
            $this->printPreOrder($root->left);
            $this->printPreOrder($root->right);
            echo $root->getData() . ' ';
        }
    }

    public function printInOrder($root) {
        if ($root != NULL) {
            $this->printPreOrder($root->left);
            echo $root->getData() . ' ';
            $this->printPreOrder($root->right);
        }
    }

    public function findSmallest($root) {
        if ($root != NULL) {
            while ($root->left != NULL) {
                $root = $root->left;
            }
            echo $root->getData() . PHP_EOL;
        }
    }

    public function findLargest($root) {
        if ($root != NULL) {
            while ($root->right != NULL) {
                $root = $root->right;
            }
            echo $root->getData() . PHP_EOL;
        }
    }

    public function delete($key, $root) {
        if ($root != NULL) {
            if ($key == $root->getData()) {
                echo $key . ' Found and going to be deleted' . PHP_EOL;
                if ($root->left != NULL && $root->left->right != NULL) {
                    $current = $root->left;
                    $prev = $current;
                    while ($current->right != NULL) {
                        $prev = $current;
                        $current = $current->right;
                    }
                    echo $current->getData() . ' inplace of '
                    . $root->getData() . PHP_EOL;
                    $root->setData($current->getData());
                    $prev->right = NULL;
                    $current = NULL;
                }
                if ($root->right != NULL) {
                    $current = $root;
                    $prev = $current;
                    while ($current->right != NULL) {
                        $prev = $current;
                        $current = $current->right;
                    }
                    echo $current->getData() . ' inplace of '
                    . $root->getData() . PHP_EOL;
                    $root->setData($current->getData());
                    $prev->right = NULL;
                    $current = NULL;
                }
            } elseif ($key <= $root->getData()) {
                $this->delete($key, $root->left);
            } elseif ($key > $root->getData()) {
                $this->delete($key, $root->right);
            } else {
                echo 'NOT FOUND' . PHP_EOL;
            }
        }
    }
}
