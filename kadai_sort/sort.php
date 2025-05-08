<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
        <p>昇順にソートします。</p>
        <?php
$nums = [15, 4, 18, 23, 10];
sort($nums); // 昇順ソート

foreach ($nums as $n) {
    echo $n . "<br>";
}
?>


<p>降順にソートします。</p>
<?php
$nums = [15, 4, 18, 23, 10];
rsort($nums); // 降順ソート

foreach ($nums as $n) {
    echo $n . "<br>";
}
?>

</body>

</html>