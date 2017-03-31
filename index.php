<?php
spl_autoload_register();
function debug($obj)
{
    echo '<pre>';
    print_r($obj);
    echo '</pre>';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php


/*// Рандомно заполним исходный массив
for ($i=0; $i<100; $i++)
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
}*/


$tree = new BinaryTree();

$treeShow = $tree->buildTree(4);


$tree->traverse();

?>








</body>
</html>
