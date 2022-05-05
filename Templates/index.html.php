<?php ob_start()?>

    <div class="cookie_Holder">
        <img id="cookie" src="CSS/images/cookie.png" alt="cookie" width="400" heigh="400" onClick="changevar()">
    </div>

    <div class="clicker_stats">
        <p id="click_points">Click the Cookie</p>
    </div>


    <script type="text/javascript">
    var count = 0;
    function changevar(){
        var disp = document.getElementById("click_points");
        count = count + 1;
        disp.innerHTML = "Points: " + count;
    }
    </script>









<?php
$content=ob_get_clean();
require "Templates/layout.html.php";
?>
