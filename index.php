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
    <script src="js/script.js"></script>
</head>
<body>

<?php

$tree = new BinaryTree();
$tree->buildTree(4);
$node = $tree->root;
$tree->showTree($node);



?>


<?php  ?>
<?php //$tree->traverse(); ?>


</body>
</html>
