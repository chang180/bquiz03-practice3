<form action="api/fastdel.php" method="post" onsubmit="return confirm('確定？')">
    <h1 class="ct">訂單管理</h1>
    快速刪除：<input type="radio" name="mode" value="1">依日期<input type="text" name="date"><input type="radio" name="mode" value="2">
    依電影<select name="name">
        <?php
    $movies=$Movie->all();
    foreach($movies as $m){
        echo "<option value='".$m['name']."'>".$m['name']."</option>";
    }
        ?>
    </select>
    <button>刪除</button>
</form>
<table>
    <tr>
        <td>訂單編號</td>
        <td>電影名稱</td>
        <td>日期</td>
        <td>場次時間</td>
        <td>訂購數量</td>
        <td>訂購位置</td>
        <td>操作</td>
    </tr>
    <?php
$orders=$Ord->all();
foreach($orders as $o){
    ?>
    <tr>
        <td><?=$o['no'];?></td>
        <td><?=$o['movie'];?></td>
        <td><?=$o['date'];?></td>
        <td><?=$sess[$o['session']];?></td>
        <td><?=$o['qt'];?></td>
        <td><?php foreach(unserialize($o['seat']) as $s) echo $s,",";?></td>
        <td><a href="api/delorder.php?id=<?=$o['id'];?>"><button>刪除</button></a></td>
    </tr>
<?php } ?>
</table>
