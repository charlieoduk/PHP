<?php 


class BinaryNode {
    public $data;
    public $left;
    public $right;

    public function __construct(string $data = null) {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }

    public function addChildren(BinaryNode $left, BinaryNode $right) {
        $this->left = $left;
        $this->right = $right;
    }
}

class BinaryTree {
    public $root = null;

    public function __construct(BinaryNode $node) {
        $this->root = $node;
    }

    public function traverse(BinaryNode $node, int $level = 0) {
        if ($node) {
            echo str_repeat('-', $level);
            echo $node->data . '\n';
        }

        if ($node->left) {
            $this->traverse($node->left, $level + 1);
            $this->traverse($node->right, $level +1);
        }
    }
}
