<?php
    $id = $_GET['id'];
    $link = mysqli_connect('localhost', 'root', '', 'myfriend');
    if (!$link) {
        exit('error');
    }
    $sql = "delete from friend where id='$id'";
    $result = mysqli_query($link, $sql);
    echo "Data deleted from -->" . $sql . "<br>@".$result;
    if (!$result){
        exit('error');
    }
    
    echo "Delete complete";
    echo "<a href=myfriendlist.php>Back to list</a>";
    mysqli_close($link);
?>