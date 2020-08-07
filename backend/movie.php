<a href="?do=addmovie"><button>新增電影</button></a>
<form action="api/movie.php" method="post">
    <?php
    $rows = $Movie->all();
    foreach ($rows as $row) {
    ?>
        <div class="container" style="display:flex">
            <img src="img/<?= $row['poster']; ?>" style="width:80px;height:100px">
            <div>分級：<img src="icon/<?= $row['level']; ?>.png">
            </div>
            <div>

                <div style="display:flex">
                    <div>片名：<?= $row['name']; ?></div>
                    <div>片長：<?= $row['length']; ?></div>
                    <div>上映時間：<?= $row['ondate']; ?></div>
                </div>
                <div><button type="button" onclick="location.href='?do=editmovie&id=<?= $row['id']; ?>'">編輯電影</button>
                <button type="button" onclick="location.href='api/delmovie.php?id=<?= $row['id']; ?>'">刪除電影</button>
            </div>
            <div>劇情簡介：<?=$row['intro'];?></div>
        </div>
        </div>
        <hr>
    <?php } ?>
</form>