<?php

interface Queue {

    public function enqueue(string $item);

    public function dequeue();

    public function peek();

    public function isEmpty();
}

class AgentQueue implements Queue {
    private $limit;
    private $queue;

    public function __construct(int $limit = 20) {
        $this->limit = $limit;
        $this->queue = [];
    }

    public function dequeue() {
        if ($this->isEmpty()) {
            throw new UnderflowException('Queue is empty');
        } else {
            unset($this->queue[0]);
            $newQueue = [];
            foreach ($this->queue as $queue) {
                $newQueue[] = $queue;
            }
            $this->queue = $newQueue;
            return $this->queue;
        }
    }

    public function enqueue(string $newItem) {
        if (count($this->queue) < $this->limit) {
            $this->queue[] = $newItem;
        } else {
            throw new OverflowException('Queue is full');
        }
    }

    public function peek() {
        return current($this->queue);
    }

    public function isEmpty() {
        return empty($this->queue);
    }
}
