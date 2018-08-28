<?php



class ListNode {
    public $data = null;
    public $next = null;
    public $prev = null;

    public function __construct(string $data = null) {
        $this->data = $data;
    }
}

class DoublyLinkedList {
    private $_firstNode = null;
    private $_lastNode = null;
    private $_totalNode = 0;

    public function insertAtFirst(string $data =null) {
        $newNode = new ListNode($data);
        if ($this->_firstNode === null) {
            $this->_firstNode = &$newNode;
            $this->_lastNode = $newNode;
        } else {
            $currentFirstNode = $this->_firstNode;
            $this->_firstNode = &$newNode;
            $newNode->next = $currentFirstNode;
            $currentFirstNode->prev = $newNode;
        }
        $this->_totalNode++;
        return true;
    }

    public function insertAtLast(string $data = null) {
        $newNode = new ListNode($data);
        if ($this->_firstNode === null) {
            $this->_firstNode = &$newNode;
            $this->_lastNode = $newNode;
        } else {
            $currentNode = $this->_lastNode;
            $currentNode->next = $newNode;
            $newNode->prev = $currentNode;
            $this->_lastNode = $newNode;
        }
        $this->_totalNode++;
        return true;
    }

    public function delete(string $query = null) {
        if ($this->_firstNode) {
            $previous = null;
            $currentNode = $this->_firstNode;
            while ($currentNode !== null) {
                if ($currentNode->data === $query) {
                    if ($currentNode->next === null) {
                        $previous->next = null;
                    } else {
                        $previous->next = $currentNode->next;
                        $currentNode->next->prev = $previous;
                    }
                    $this->_totalNode--;
                    break;
                }
                $previous = $currentNode;
                $currentNode = $currentNode->next;
            }
        }
    }
}
