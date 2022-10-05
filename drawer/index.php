<html lang="en">
<head>
    <title>Drawer</title>
</head>
<body style="height: auto">
<?php
require_once 'draw.php';
$id = $_GET["id"];
if ($id == 1) {
    print_r(f1());
}
if ($id == 2) {
    print_r(f2());
}
if ($id == 3) {
    print_r(f3());
}
?>
</body>
</html>