<?php
    $link = mysqli_connect('localhost', 'root', '', 'myfriend');
    if (!$link) {
        exit("Disconnected from database.");
    }

    $getname = $_POST['textname'];
    $getphone = $_POST['textphone'];

    $sql ="INSERT INTO friend values('', '$getname', $getphone)";
    echo $sql . "<br>";

    $result = mysqli_query($link, $sql);
    if (!$result) {
        exit("cannot insert to database.");
    }
    echo "insert completed.";
    echo "<a href = 'myfriendlist.php'>go list</a>";
    mysqli_close($link);

?>