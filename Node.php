<?php

/**
 * A node (or item) in a linked list.
 * (Provided by HackerRank.)
 *
 * @author Duggie
 * @since 2017-11-03
 */
class Node
{
    /** @var some data */
    public $data;
    /** @var the next node */
    public $next;

    /**
     * Initialise the Node model
     */
    function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}
