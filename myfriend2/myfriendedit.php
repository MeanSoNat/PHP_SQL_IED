<?php
    $link = mysqli_connect('localhost', 'root', '', 'myfriend');
    if (!$link){
        exit('disconnected');
    }

    $id = $_GET['id'];
    $sql = "SELECT * FROM friend WHERE id='$id'";
    //echo $sql;
    echo "<br>";

    $result = mysqli_query($link, $sql);
    if (!$result) {
        exit('error');
    }
    $data = mysqli_fetch_array($result);
    $name = $data['name'];
    $phone = $data['phone'];
    mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="editform" method="post" action="myfriendupdate.php">
        id: <input type="text" name="textid" value='<?=$id?>' readonly>;
        Name: <input type="text" name="textname" value='<?=$name?>'>
        Phone: <input type="text" name="textphone" value='<?=$phone?>'>
        <input type="submit" value="edit">
    </form>
</body>
</html>