<?php

include_once 'Node.php';
include_once 'List.php';

    $l=new LinkList();
   // $l->showAll();
    $l->insert(12);
    $l->insert(16);
    $l->insert(12);
    $l->insert(16);
    $l->insert(12);
    $l->insert(16);
    $l->insert(12);
    $l->insert(16);
    $l->delete(116);
    $l->showAll();
