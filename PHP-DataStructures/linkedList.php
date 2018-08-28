<?php

/* A linked list is a collection of objects known as
 * nodes. Each node is connected to the next node using a link
 */
class ListNode {
    public $data = null;
    public $next = null;

    public function __construct(string $data = null) {
        $this->data = $data;
    }
}

class LinkedList {
    private $_firstNode = null;
    private $_totalNodes = 0;

    public function insert(string $data = null) {
        $newNode = new ListNode($data);

        if ($this->_firstNode == null) {
            $this->_firstNode = &$newNode;
        } else {
            $currentNode = $this->_firstNode;
            while ($currentNode->next !== null) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
        $this->_totalNode++;
        return true;
    }

    public function display() {
        echo "Total book titles: ".$this->_totalNode."\n";
        $currentNode = $this->_firstNode;
        while ($currentNode !== null) {
            echo $currentNode->data . "\n";
            $currentNode = $currentNode->next;
        }
    }

    public function insertAtFirstNode(string $data = null) {
        $newNode = new ListNode($data);

        if ($this->_firstNode == null) {
            $this->_firstNode = &$newNode;
        } else {
            $currentFirstNode = $this->_firstNode;
            $this->_firstNode = &$newNode;
            $newNode->next = $currentFirstNode;
        }
        $this->_totalNode++;
        return true;
    }

    public function search(string $data = null) {
        if ($this->_totalNode) {
            $currentNode = $this_firstNode;
            while($currentNode !== null) {
                if ($currentNode->data === $data) {
                    return $currentNode;
                }
                $currentNode = $currentNode->next;
            }
        }
        return false;
    }

    public function insertBefore(string $data = null, string $query  = null) {
        $newNode = new ListNode($data);

        if ($this->_firstNode) {
            $previous = null;
            $currentNode = $this->_firstNode;
            while($currentNode !== null) {
                if ($currentNode->data === $query) {
                    $newNode->next = $currentNode;
                    $previous->next = $newNode;
                    $this->_totalNode++;
                    break;
                }
                $previous = $currentNode;
                $currentNode = $currentNode->next;
            }
        }
    }

    public function insertAfter(string $data = null, string $query = null) {
        $newNode = new ListNode($data);
        if ($this->_firstNode) {
            $nextNode = null;
            $currentNode = $this_firstNode;
            while ($currentNode !== null ) {
                if ($currentNode->data === $query) {
                    if ($nextNode !== null) {
                        $newNode->next = $nextNode;
                    }
                    $currentNode->next = $newNode;
                    $this->_totalNode++;
                    break;
                }
                $currentNode = $currentNode->next;
                $nextNode = $currentNode->next;
            }
        }
    }

    public function getNthNode(int $n = 0) {
        $count = 1;
        if ($this->_firstNode !== null) {
            $currentNode =$this->_firstNode;
            while ($currentNode !== null) {
                if ($count === $n) {
                    return $currentNode;
                }
                $count++;
                $currentNode = $currentNode->next;
            }
        }
    }
}
