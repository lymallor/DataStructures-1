<?php
require_once 'Node.php';
require_once 'Tree.php';
$t=new Tree(20);
$t->insert(15,$t->root);
$t->insert(17,$t->root);
$t->insert(4,$t->root);
$t->insert(3,$t->root);
$t->insert(4,$t->root);

$t->findSmallest($t->root);

$t->printPrePrder($t->root);

 

