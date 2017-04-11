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
    <link rel="stylesheet" href="css/style.scss">
</head>
<body>
<h1>Бинарное дерево!</h1>
<?php

$tree = new BinaryTree();

$treeShow = $tree->buildTree(2);


//debug($tree);


?>


<?php $tree->traverse(); ?>


</body>
</html>
