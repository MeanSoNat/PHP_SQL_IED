<?php
    $id = $_POST['textid'];
    $name = $_POST['textname'];
    $phone = $_POST['textphone'];
    $link = mysqli_connect('localhost', 'root', '', 'myfriend');

    if (!$link) {
        exit("disconnect");
    }
    $sql = "UPDATE friend set name='$name', phone='$phone' where id='$id'";
    
    $result = mysqli_query($link, $sql);

    if (!$result) {
        exit('error');
    }

    echo "Update complete.";
    echo "<a href=myfriendlist.php>back to list</a>";
    mysqli_close($link);
?>