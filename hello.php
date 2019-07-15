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
        global $con;
        $query = "SELECT * FROM users";
        $sth = mysqli_query($con, $query);
        $rows = array();
        while($r = mysqli_fetch_assoc($sth)){
            $rows[] = $r;
        }

        echo json_encode($rows);
    ?>
</body>
</html>