<?php

/**
 * The linked list class, manages the nodes.
 *
 * @author Duggie
 * @since 2017-11-03
 */
 
class LinkedList
{
    /**
     * Add a new node containing $data to the end of the linked list.
     *
     * @param Node|null $head
     * @param $data could be anything
     *
     * @return Node
     */
    public function insert($head, $data)
    {
        if (is_null($head)) {
            return $this->createNode($data);
        }
        
        $next = $this->findEndOfList($head);
        $next->next = $this->createNode($data);
        
        return $head;
    }

    /**
     * Instantiate a new Node instance.
     * 
     * @param $data
     *
     * @return Node
     */
    private function createNode($data)
    {
        return (new Node($data));
    }

    /**
     * Travel to end of linked list..
     * 
     * @param Node $node
     *
     * @return Node
     */
    private function findEndOfList(Node $node)
    {
        while (!is_null($node->next)) {
            $node = $node->next;
        }
        
        return $node;
    }

    /**
     * Display the contents of the linked list.
     * 
     * @param $head
     *
     * @return void
     */
    public function display($head)
    {
        $start = $head;
        while ($start) {
            echo $start->data,' ';
            $start = $start->next;
        }
    }
}
