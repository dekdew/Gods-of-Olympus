<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    $json = file_get_contents('data.json');
    $data = json_decode($json);

    $god = $_POST["god"];
    echo $data->$god->romanName;
  ?>
</body>

</html>