<?php
    $file = 'lista.json';
    if(file_exists($file)){
        $json = file_get_contents($file);
        $data = json_decode($json, true);
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <style>
        input{
            width: 300px;
            height: 22px;
        }

        button{
            
        }
    </style>

    <h1>Témák:</h1>
    <br>
    <form method="post" action="save.php">
    <input name="temak" value="" ></input>
    <br>
    <br>
    <button type="submit">Save</button>
    <br>
    <br>
        <?php echo htmlspecialchars($data['temak']);?>
</form>
</center>
</body>
</html>