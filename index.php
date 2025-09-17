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

    <h1>Témák:</h1>
    <br>
    <form method="post" action="save.php">
    <textarea name="temak" id="" cols="120" rows="40" value="<?php echo htmlspecialchars($data['temak']) ?>"></textarea>

    <button type="submit">save</button>
</form>
</body>
</html>