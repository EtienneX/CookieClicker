<?php ob_start()?>

<div class="wrapper">
    <div class="shop_item">
        <img src="CSS/images/click.png" alt="clicker" width="150" height="150">
        <br>
        <button type="button" class="btn btn-primary">Buy Item</button>
    </div>
    <div class="shop_item">
        <img src="CSS/images/click.png" alt="clicker" width="150" height="150">
        <br>
        <button type="button" class="btn btn-primary">Buy Item</button>
    </div>
    <div class="shop_item">
        <img src="CSS/images/click.png" alt="clicker" width="150" height="150">
        <br>
        <button type="button" class="btn btn-primary">Buy Item</button>
    </div>
    <div class="shop_item">
        <img src="CSS/images/click.png" alt="clicker" width="150" height="150">
        <br>
        <button type="button" class="btn btn-primary">Buy Item</button>
    </div>
    <div class="shop_item">
        <img src="CSS/images/click.png" alt="clicker" width="150" height="150">
        <br>
        <button type="button" class="btn btn-primary">Buy Item</button>
    </div>
</div>




<?php
$content=ob_get_clean();
require "Templates/layout.html.php";
?>
