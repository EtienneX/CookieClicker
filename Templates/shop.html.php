<?php ob_start()?>

<div class="wrapper">
    <div class="shop_item">
        <p>Test</p>
    </div>
    <div class="shop_item">
        <p>Test</p>
    </div>
    <div class="shop_item">
        <p>Test</p>
    </div>
    <div class="shop_item">
        <p>Test</p>
    </div>
    <div class="shop_item">
        <p>Test</p>
    </div>
</div>




<?php
$content=ob_get_clean();
require "Templates/layout.html.php";
?>
