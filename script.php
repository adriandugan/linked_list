<?php

declare(strict_types = 1);

require_once(__DIR__ . '/Node.php');
require_once(__DIR__ . '/LinkedList.php');

$T = intval(fgets(STDIN));

$head = null;

$mylist = new LinkedList;

while ($T-->0) {
    $data = intval(fgets(STDIN));
    $head = $mylist->insert($head,$data);
}

$mylist->display($head);
