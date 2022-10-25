<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peys App</title>
</head>
<body>
    <form method="post">
        <h2>Peys App</h2>

        <label for="photoSizer">Select Photo Size</label>
        
        <input type="range" name="photoSizer" id="photoSizer" min="10" max="100" value="60" step="10"><br>
        
        <label for="clrBorder">Select Border Color</label>
        <input type="color" name="clrBorder" id="clrBorder"><br>

        <input type="submit" name="btnProcess" value="Process"><br>

        <img src="NicoRobin.jpg" alt="" width="600" height="600">
    </form>

    
</body>
</html>