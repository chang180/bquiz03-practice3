<form action="api/addmovie.php" method="post" enctype="multipart/form-data">
    片名：<input type="text" name="name"><br>
    分級：<select name="level">
        <?php
        foreach ($level as $key => $value) {
            echo "<option value='$key'>$value</option>";
        }
        ?>
    </select>
    <br>
    片長：<input type="text" name="length"><br>
    上映日期：<select name="year">
        <option value="2020">2020</option>
    </select>年
    <select name="month">
        <?php
        for ($i = 1; $i <= 12; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
    </select>
    月<select name="day">
        <?php
        for ($i = 1; $i <= 31; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
    </select>日
    <br>
    發行商：<input type="text" name="publish"><br>
    導演：<input type="text" name="director"><br>
預告影片：<input type="file" name="trailer"><br>
電影海報：<input type="file" name="poster"><br>
劇情簡介：<textarea name="intro" style="width:800px;height:100px;"></textarea><br>
<input type="hidden" name="id" value="<?=$_GET['id'];?>">
<div class="ct"><button>編輯確定</button><button type="reset">重置</button></div>

</form>