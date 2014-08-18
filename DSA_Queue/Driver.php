<?php

require_once 'Queue.php';

$q=new Queue(5);
$q->enQueue(2);
$q->enQueue(4);
$q->enQueue(6);
$q->enQueue(8);
$q->enQueue(10);
$q->enQueue(12);
$q->showAll();
