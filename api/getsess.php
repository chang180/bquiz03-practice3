<?php
include_once "../base.php";
$today = date("Y-m-d");
$date = $_GET['date'];
$movie = $_GET['movie'];
// 訂票日為當日的場次處理
$nowhour = date("H");
$nowsess = floor(($nowhour - 14) / 2) + 1;


for ($i = 1; $i <= 5; $i++) {
    // 剩餘座位處理
    $seat = [];
    $orders = $Ord->all(['movie' => $movie, 'date' => $date, 'session' => $i]);
    foreach ($orders as $o) {
        $seat = array_merge($seat, unserialize($o['seat']));
    }
    $count = count($seat);
    if ($i > $nowsess) {
        echo "<option value='$i'>$sess[$i] 剩餘座位" . (20 - $count) . "</option>";
    } else {
        echo "<option value='$i'>$sess[$i] 剩餘座位" . (20 - $count) . "</option>";
    }
}
