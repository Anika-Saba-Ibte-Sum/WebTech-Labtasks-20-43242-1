<p>
<?php
    session_start();
    if(isset($_SESSION["pd_msg"])){
        echo $_SESSION["pd_msg"];
        $_SESSION["pd_msg"] = "";
    }
?>
</p>
<div class="container" style="width:500px;">
<form action="../controls/add-product-control.php" method="post">
    <fieldset >
        <legend>ADD PRODUCT</legend>
    <label for="fname">Serial</label><br>
    <input type="text" name="sl"><br>
    <label for="fname">Name</label><br>
    <input type="text" name="pd_name"><br>
    <label for="fname">Buying Price</label><br>
    <input type="text" name="pd_buying_price"><br>
    <label for="fname">Selling Price</label><br>
    <input type="text" name="pd_selling_price"><br>
    <input type="checkbox" name="display">
    <label for="fname">Display</label><br>
    <br>
    <hr>
    <input type="submit" name="add" value="Save">
    <a href="/New folder/Lab task 5/index.php">Back</a>
</fieldset>
</form>


</div>