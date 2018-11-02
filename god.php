<?php
    $json = file_get_contents('data.json');
    $data = json_decode($json);

    $god = $_POST["god"];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title><?php echo $data->$god->greekName; ?></title>
</head>

<body>

</body>

</html>