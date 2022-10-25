<?php
    $sizes = array('Regular', 'Up-Size (add ₱5)', 'Jumbo (add ₱10)');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendo Machine</title>
</head>
<body>
    <form method="post">
        <h1>Vendo Machine</h1>
        <fieldset>
            <legend>Products</legend>
            <input type="checkbox" name="chkProduct[]" id="chkCoke" value="Coke"> <label for="chkCoke">Coke</label><br>
            <input type="checkbox" name="chkProduct[]" id="chkSprite" value="Sprite"> <label for="chkSprite">Sprite</label><br>
            <input type="checkbox" name="chkProduct[]" id="chkRoyal" value="Royal"> <label for="chkRoyal">Royal</label><br>
            <input type="checkbox" name="chkProduct[]" id="chkPepsi" value="Pepsi"> <label for="chkPepsi">Pepsi</label><br>
            <input type="checkbox" name="chkProduct[]" id="chkMountainDew" value="MountainDew"> <label for="chkMountainDew">Mountain Dew</label>
        </fieldset>

        <fieldset>
            <legend>Options:</legend>
            <label for="drpSize">Size</label>

            <select name="drpSize" id="drpSize">
                <?php
                    foreach($sizes as $key => $value){
                        echo '<option value="'.$value.'">'. $value .'</option>';
                    }
                ?>
            </select>

            <label for="txtNumber">Quantity</label>
            <input type="number" name="txtNumber" id="txtNumber" min="0">
            <input type="submit" name="btnCheckout" value="Check Out">
        </fieldset>
        <hr>

        <?php
            
        ?>
    </form>
    
</body>
</html>