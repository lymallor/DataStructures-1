<?php

require_once 'DList.php';

$dl=new DList();
$dl->insert(12);
$dl->insert(22);
$dl->insert(32);
$dl->insert(42);
$dl->showAll();
$dl->delete(52);
$dl->showAll();
