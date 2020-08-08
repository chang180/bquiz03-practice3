<?php
$ord=$Ord->find(['no'=>$_GET['no']])
?>
感謝您的訂購，您的訂單編號是：<?=$ord['no'];?><br>
電影名稱：<?=$ord['movie'];?><br>
日期：<?=$ord['date'];?><br>
場次時間：<?=$ord['session'];?><br>
座位：<br>
<?php foreach(unserialize($ord['seat']) as $s) echo $s,"," ;?><br>
共<?=$ord['qt'];?>張電影票;
<div class="ct"><button>確認</button></div>