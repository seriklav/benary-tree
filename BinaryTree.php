<?php


//  https://www.youtube.com/watch?v=kVLYZz-R6H0
//  https://toster.ru/q/157537
//  N узлов -> N-1 указателей(стрелок, ребер)
//  Максимальное количество узлов 2 ^ $height -1
//  Высота дерева = высота корня
//  Высота листового узла(самый нижний узел без child) == 0
//  У каждого узла неболее двух потомков

//  Все елементы левого потомка меньше корневого елемента
//  Ве елементы правого потомка больше корневого елемента

//    public $depth;      //  Глубина узла - длина пути от корня до узла(количество ребер)
//    public $height;     //  Высота узла - количество ребер в самом длинном пути от узла до листового узла
//  Максимальное количество узлов 2 ^ $height -1



class BinaryTree
{
    public $depthTree;  //  Глубина дерева(уровень вложенности)
    public $root;

    public function buildTree($depthTree = 1)
    {

        $this->depthTree = $depthTree;
// Рандомно заполним исходный массив значений для дерева
        $array = [];
        for ($i=0; $i<2**$depthTree-1; $i++)
        {
            $array[$i] = rand(0, 100);
        }

// Корень
        $node = new BinaryNode($array[0]);
        $root = $node ;// в $root сохраняем корневой узел
// Создадим очередь и добавим 2 раза корень
        $queue = new SplQueue();
        $queue->enqueue($node);
        $queue->enqueue($node);

// В цикле перебираем массив и выполняем действия согласно алгоритму
        for ($i=1; $i<count($array); $i++)
        {
            $t = $queue->dequeue();
            $node = new BinaryNode($array[$i],$i);
            if($t->left == null){
                $t->left = $node;
                $t->left->parentId = $t->id;}
            else{
                $t->right = $node;
                $t->right->parentId = $t->id;}

            $queue->enqueue($node);
            $queue->enqueue($node);
        }
        $this->root = $root;
        return $root;
    }

    public function traverse() {
        // отображение дерева в возрастающем порядке от корня
        $this->root->dump();
    }

}