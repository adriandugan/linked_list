<?php

declare(strict_types = 1);

/**
 * Script to build up and output the linked list contents.
 *
 * Assumptions:
 * * values are whole integer numbers, greater than zero.
 * 
 * @author Duggie
 * @since 2017-11-03
 */

require_once(__DIR__ . '/LinkedList.php');

$list = new LinkedList;

$head = null;
while ($data = intval(fgets(STDIN))) {
    $head = $list->insert($head, $data);
}

$list->display($head);
