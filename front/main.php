<div class="half" style="vertical-align:top;">
  <h1>預告片介紹</h1>
  <div class="rb tab" style="width:95%;">
    <div id="abgne-block-20111227">
      <div style="height:300px;">
        <div class="lists" style="position:relative">
          <img id="showpost" style="height:250px;width:200px;"><br>
          <span id="showtext"></span>
        </div>
      </div>
      <div class="controls" style="height:100px;display:flex;">
        <a href="#"><button onclick="pp(1)">&#9664;</button></a>
        <?php
        $posters = $Poster->all(['sh' => 1], "ORDER BY rank DESC");
        foreach ($posters as $key => $p) {
          echo "<div class='im' id='ssaa$key' onclick='change($key)'><img src='img/" . $p['img'] . "' style='width:70px;'><br>" . $p['text'] . "</div>";
        }
        ?>
        <a href="#"><button onclick="pp(2)">&#9654;</button></a>
      </div>
    </div>
  </div>
</div>
<script>
  var nowpage = 0,
    num = <?= count($posters); ?>;
  let anim = <?= $_SESSION['ani']; ?>;
  let po = 0;

  change(0);

  function change(post) {
    $("#showpost").attr("src", $("#ssaa" + post).find("img").attr("src"));
    $("#showtext").text($("#ssaa" + post).text());
    po = post;
  }

  function ani() {
    switch (anim) {
      case 1:
        $(".lists").fadeOut();
        change(po);
        $(".lists").fadeIn();
        break;
      case 2:
        $(".lists").slideToggle();
        change(po);
        $(".lists").slideToggle();
        break;
      default:
        $(".lists").animate({
          position: "absolute",
          opacity: "0",
          left: "-=200px"
        });
        change(po);
        $(".lists").animate({
          position: "absolute",
          opacity: "1",
          left: "+=200px"
        });
        break;
    }
  }

  setInterval(() => {
    po++;
    if (po == num) po = 0;
    ani();
  }, 3000);
</script>


<div class="half">
  <h1>院線片清單</h1>
  <div class="rb tab" style="width:95%;display:flex;flex-wrap:wrap">
  <?php
$today=date("Y-m-d");
$ondate=date("Y-m-d",strtotime("$today -2days"));
$onMovies=$Movie->all([]," WHERE `ondate` >= '$ondate' && `ondate` <= '$today' ");
$total=count($onMovies);
$now=$_GET['p']??"1";
$div=4;
$pages=ceil($total/$div);
$start=($now-1)*$div;
$movies=$Movie->all([]," WHERE `ondate` >= '$ondate' && `ondate` <= '$today' LIMIT $start,$div");
foreach($movies as $row){
  ?>
  <div style="width:45%;border:1px solid black">
<div>片名：<?=$row['name'];?></div>
<div style="display:flex">
  <img src="img/<?=$row['poster'];?>" style="width:68px;height:100px;">
  <div>
    <div>分級：<?=$level[$row['level']];?></div>
    <div>上映日期：<?=$row['ondate'];?></div>
  </div>
</div>
<div class="ct"><a href="?do=intro&id=<?=$row['id'];?>"><button>劇情簡介</button></a><a href="?do=order&id=<?=$row['id'];?>"><button>線上訂票</button></a></div>
  </div>
<?php } ?>
</div>
      <div class="ct"> 
  <?php
  for($i=1;$i<=$pages;$i++){
    $font=($i==$now)?"30px":"20px";
    echo "<a href='?p=$i' style='font-size:$font'>$i</a>";
  }
  ?>
      </div>

</div>

<script>
  function pp(x) {
    var s, t;
    if (x == 1 && nowpage - 1 >= 0) {
      nowpage--;
    }
    if (x == 2 && (nowpage + 1) <= num * 1 - 4) {
      nowpage++;
    }
    $(".im").hide()
    for (s = 0; s <= 3; s++) {
      t = s * 1 + nowpage * 1;
      $("#ssaa" + t).show()
    }
  }
  pp(1)
</script>