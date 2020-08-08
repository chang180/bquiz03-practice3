<div class="tab rb" style="width:87%;">
    <h1 class="ct">線上訂票</h1>
    <hr>
    <div class="ct order-form">
        <form>
            <table style="margin:auto">
                <tr>
                    <td>電影：</td>
                    <td>
                        <select name="movie" id="movie">
                            <?php
                            $today = date("Y-m-d");
                            $ondate = date("Y-m-d", strtotime("$today -2days"));
                            $onMovies = $Movie->all([], " WHERE `ondate` >= '$ondate' && `ondate` <= '$today' ");
                            foreach ($onMovies as $on) {
                                $chk = ($on['id'] == @$_GET['id']) ? "selected" : "";
                                echo "<option value='" . $on['id'] . "' $chk>" . $on['name'] . "</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>日期：</td>
                    <td>
                        <select name="date" class="date"></select>
                    </td>
                </tr>
                <tr>
                    <td>場次：</td>
                    <td>
                        <select name="session" class="sess"></select>
                    </td>
                </tr>
            </table>
            <div class="ct"><button type="button" onclick="booking()">確定</button><button type="reset">重置</button></div>
        </form>
    </div>
    <script>
        let movie = $("#movie option:selected").text();
        let date = $(".date option:selected").text();
        let sess = $(".sess option:selected").text();
        let ticket = 0;
        let seat = [];

        function booking() {
            $(".order-form,.ticket-form").toggle();

            movie = $("#movie option:selected").text();
            date = $(".date option:selected").text();
            sess = $(".sess option:selected").text();
            let session = $(".sess option:selected").val();
            $("#mName").text(movie);
            $("#mDate").text(date);
            $("#mSess").text(sess);

            $.get("api/getseat.php", {
                movie,
                date,
                session
            }, function(res) {
                $(".room").html(res);

                $(".seat").on("change", function() {
                    if (this.checked) {
                        if (ticket > 3) this.checked = false;
                        else {
                            ticket++;
                            seat.push(this.value);
                        }
                    } else {
                        ticket--;
                        seat.splice(seat.indexOf(this.value), "1");
                    }
                    $("#ticket").text(ticket);
                })

                $("#send").on("click",function(){
                    $.get("api/order.php",{movie,session,date,seat},function(no){
                        location.href=`?do=result&no=${no}`;
                    })
                })
            })
        }

        $("#movie").on("change", function() {
            getdate();
            getsession();
        })

        getdate()

        function getdate() {
            $.get("api/getdate.php", {
                "id": $("#movie option:selected").val()
            }, function(res) {
                $(".date").html(res);
                getsession();
            })
        }

        function getsession() {
            $.get("api/getsess.php", {
                "date": $(".date option:selected").val()
            }, function(res) {
                $(".sess").html(res);
            })
        }



        function prev() {
            $(".order-form,.ticket-form").toggle();
            $("#room").html("");
            ticket = 0;
            $("#ticket").text(ticket);
        }
    </script>

    <form action="api/order.php" method="post">
        <div class="ct ticket-form" style="display:none;">
            <div class="room"></div>
            <div class="info"></div>
            您選擇的電影是：<span id="mName"></span><br>
            您選擇的時刻是：<span id="mDate"></span>&nbsp;<span id="mSess"></span><br>
            您已經勾選了<span id="ticket">0</span>張票，最多可以購買4張票<br>
            <div class="ct"><button type="button" onclick="prev()">上一步</button><button type="button" id="send">訂購</button></div>
        </div>
</div>
</form>