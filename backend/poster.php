<h1 class="ct">預告片管理</h1>
<form action="api/poster.php" method="post">
    <table>
        <tr>
            <td width="22%">預告片海報</td>
            <td width="22%">預告片片名</td>
            <td width="22%">預告片順序</td>
            <td width="22%">操作</td>
        </tr>
        <?php
    $rows=$Poster->all([]," ORDER BY rank DESC ");
    foreach ($rows as $row){
        ?>
        <tr>
            <td><img src="img/<?=$row['img'];?>" style="width:68px;height:100px;"></td>
            <td><input type="text" name="text[]" value="<?=$row['text'];?>"></td>
            <td><input type="number" name="rank[]" value="<?=$row['rank'];?>"></td>
            <td>
                <input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?"checked":"";?>>顯示
                <input type="checkbox" name="del[]" value="<?=$row['id'];?>">刪除
            </td>
            <input type="hidden" name="id[]" value="<?=$row['id'];?>">
        </tr>
    <?php } ?>
    </table>
    動畫效果：(1:淡入2:縮放3:滑出)<input type="number" name="ani" value="<?=$_SESSION['ani'];?>"><br>
    <button>編輯確定</button><button type="reset">重置</button>
</form>

<h1 class="ct">新增預告片海報</h1>
<form action="api/add_poster.php" method="post" enctype="multipart/form-data">
預告片海報：<input type="file" name="img">預告片片名<input type="text" name="text">
<button>新增</button><button type="reset">重置</button>
</form>