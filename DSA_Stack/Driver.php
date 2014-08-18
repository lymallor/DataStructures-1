<?php

require 'Stack.php';

$s=new Stack(5);
$s->push(1);
$s->push(2);
$s->push(3);
$s->push(4);
$s->push(5);
$s->showAll();
$s->pop();
$s->showAll();