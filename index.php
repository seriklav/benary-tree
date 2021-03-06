<?php
//    spl_autoload_register();
include"BinaryTree.php";
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
    <link rel="stylesheet" href="css/style.min.css">
    <script src="js/script.js"></script>
</head>
<body>
<?php
if (isset($_POST['deep_tree'])) {
    $deep = $_POST['deep_tree'];
    if($deep>10) {
        echo "<div class='warning'>Глубина дерева длжна быть не больше 10-ти Уровней</div><br />";
        $deep = 3;
    }
    elseif($deep<1){
        echo "<div class='warning'>Глубина дерева длжна быть не мене 1-го Уровня</div><br />";
    $deep = 3;}
}else{
    $deep = 3;
}
?>

<div class="form_deep">
        <form action="index.php" name="form_deep" method="post">
            <input type="number" name="deep_tree" min="1" max="10" value="<?= $deep ?>" required autofocus >
            <input type="submit" onsubmit="return checkForm()" value="Установить глубину">
        </form>
    </div>

    <?php
        $tree = new BinaryTree();
        $tree->buildTree($deep);
        $node = $tree->root;
        $tree->showHtmlTree($node);
    ?>
</body>
</html>
