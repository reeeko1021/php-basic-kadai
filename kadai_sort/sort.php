<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
<?php
// ソート関数：引数の配列を昇順または降順にして返す
function sort_2way(array $arr, bool $desc = false): array {
    if ($desc) {
        rsort($arr); // 降順
    } else {
        sort($arr);  // 昇順
    }
    return $arr;
}

// 元の配列
$nums = [15, 4, 18, 23, 10];

// 昇順にソートして表示
echo "昇順にソートします。<br>";
$asc = sort_2way($nums, false);
foreach ($asc as $n) {
    echo $n . "<br>";
}

echo "<br>"; // 改行

// 降順にソートして表示
echo "降順にソートします。<br>";
$desc = sort_2way($nums, true);
foreach ($desc as $n) {
    echo $n . "<br>";
}
?>

</body>

</html>