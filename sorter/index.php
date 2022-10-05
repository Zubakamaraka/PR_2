<html lang="en">
<head>
    <title>Sorter</title>
</head>
<body>
<?php
require_once 'sort.php';
echo 'Получено: ' . $_GET["array"] . '<br>';
$array = explode(",", $_GET["array"]);
$array = ShellSort($array);
$array = implode(",", $array);
echo 'Отсортировано: ' . $array;
?>
</body>
</html>