<?php

class BinaryNode
{
    /*public $id;
    public $parentId;
    public $child_left;
    public $child_right;

    public function __construct($id = 1, $parentId = 1)
    {
        $this->id = $id;
        $this->parentId = $parentId;
        $this->child_left = null;
        $this->child_right = null;

    }

    public function showNode()
    {

        $node_id =  "<div class='node_id'>Node id: {$this->id}.</div>";
        $parent_id = "<div class='parent_id'>Parent id: {$this->parentId}.</div>";


        echo "<div class='node '>{$parent_id}     {$node_id}</div>";
    }*/
    public $value;    // значение узла
    public $nameNode;    // Имя узла
    public $depthNode;  //  Глубина Узла
    public $id;    // id узла
    public $parentId; // id родительского узла
    public $left;     // левый потомок типа BinaryNode
    public $right;     // правый потомок типа BinaryNode

    public function __construct($item,$id = 0,$parentId = 1,$depthNode = 1) {
        $this->id = $id+1;
        $this->depthNode = $depthNode;
        $this->parentId = $parentId;
        $this->value = $item;
        // новые потомки - вершина
        $this->left = null;
        $this->right = null;
    }

    public function showNode()
    {

        $node_id =  "<div class='node_id'>Node id: {$this->id}.</div>";
        $parent_id = "<div class='parent_id'>Parent id: {$this->parentId}.</div>";


        echo "<div class='node '>{$parent_id}     {$node_id}</div>";
    }
    // сделаем симметричный проход текущего узла
    public function dump() {
//        debug($this->id);
        $node_id =  "<div class='node_id'>Node id: {$this->id}.</div>";
        $parent_id = "<div class='parent_id'>Parent id: {$this->parentId}.</div>";
        echo "<div class='node $this->nameNode' data-depth='$this->depthNode'>{$parent_id}     {$node_id}</div>";
        if ($this->left !== null) {
            $this->left->dump();
        }
        if ($this->right !== null) {
            $this->right->dump();
        }
    }


}