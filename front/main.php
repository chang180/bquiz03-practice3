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
      case "1":
        $(".lists").fadeOut();
        change(po);
        $(".lists").fadeIn();
        break;
      case "2":
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
    console.log(po);
    if (po == num) po = 0;
    ani();
  }, 3000);
</script>


<div class="half">
  <h1>院線片清單</h1>
  <div class="rb tab" style="width:95%;">
    <table>
      <tbody>
        <tr> </tr>
      </tbody>
    </table>
    <div class="ct"> </div>
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