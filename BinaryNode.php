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
    public $check;
    public static $count = 0;

    public function __construct($item, $id = 0, $parentId = 0, $depthNode = 1, $nameNode = "root")
    {
        $this->id = $id + 1;
        $this->depthNode = $depthNode;
        $this->parentId = $parentId;
        $this->value = $item;
        $this->nameNode = $nameNode;
        // новые потомки - вершина
        $this->left = null;
        $this->right = null;
    }

    public function showNode()
    {
        $parent_id = "<div class='parent_id'>Parent id: {$this->parentId}</div>";
        $node_id = "<div class='node_id'>Node id: {$this->id}:{$this->depthNode}</div>";

        $child_left = "<div class='node__left'></div>";
        $child_center = "<div class='node__center'>{$parent_id}     {$node_id}</div>";
        $child_right = "<div class='node__right'></div>";



        if($this->nameNode == "right_list" || $this->nameNode == "left_list" )
            $node = "<div class='node node__{$this->nameNode} data-depth={$this->depthNode}'>{$child_left}{$child_center}{$child_right}</div>";

        elseif($this->nameNode == "rightChild" || $this->nameNode == "leftChild")
            $node = "<div class=main_nodes__right><div class='node node__{$this->nameNode}'>{$child_left}{$child_center}{$child_right}</div>";

        else{
            if($this->nameNode == "ROOT" )
            $node = "<div class='node node__{$this->nameNode} data-depth={$this->depthNode}'>{$child_left}{$child_center}{$child_right}</div>";}

        echo $node;
    }


    // сделаем симметричный проход текущего узла
    public function dump()
    {
        $parent_id = "<div class='parent_id'>Parent id: {$this->parentId}.</div>";
        $node_id = "<div class='node_id'>Node id: {$this->id}:{$this->depthNode}.</div>";

        $child_left = "<div class='node__left'></div>";
        $child_center = "<div class='node__center'>{$parent_id}     {$node_id}</div>";
        $child_right = "<div class='node__right'></div>";



if($this->nameNode == "leftChild") $node = "<div class='node node__{$this->nameNode} data-depth={$this->depthNode}'>{$child_left}{$child_center}{$child_right}</div>";

if($this->nameNode == "rightChild")$node = "<div class=main_nodes__right><div class='node node__{$this->nameNode} data-depth={$this->depthNode}'>{$child_left}{$child_center}{$child_right}</div>";

else   $node = "<div class='node node__{$this->nameNode} data-depth={$this->depthNode}'>{$child_left}{$child_center}{$child_right}</div>";


        echo $node;
        if ($this->left !== null) {
            $this->left->dump();

        }
        if ($this->right !== null) {
            $this->right->dump();

        }
        echo "</div>";
    }


}