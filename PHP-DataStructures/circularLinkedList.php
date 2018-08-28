<?php


class CircularLinkedList {
    private $_firstNode = null;
    private $_totalNode = 0;

    public function insertAtEnd(string $data = null) {
        $newNode = new Listnode($data);

        if ($this->_firstNode === null) {
            $this->_firstNode = &$newNode;
        } else {
            $currentNode = $this->_firstNode;
            while($currentNode->next !== $this->_firstNode) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next =$newNode;
        }
        $newNode->next = $this->_firstNode;
        $this->_totalNode++;
        return true;
    }
}