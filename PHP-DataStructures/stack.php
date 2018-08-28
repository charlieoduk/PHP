<?php

interface Stack {
    public function push(string $item);

    public function pop();

    public function top();

    public function isEmpty();
}


class Books implements Stack {
    private $limit;
    private $stack;

    public function __construct(int $limit = 20) {
        $this->limit = $limit;
        $this->stack = [];
    }

    public function pop() {
        if ($this->isEmpty()) {
            throw new UnderFlowException ('Stack is empty');
        } else {
            $length = count($this->stack);
            unset($this->stack[$length-1]);
            return $this->stack;
        }
    }

    public function push(string $newItem) {
        if (count($this->stack) < $this->limit) {
            $this->stack[] = $newItem;
        } else {
            throw new OverFlowException ('Stack is full');
        }
    }

    public function top() {
        return end($this->stack);
    }

    public function isEmpty() {
        return empty($this->stack);
    }
}