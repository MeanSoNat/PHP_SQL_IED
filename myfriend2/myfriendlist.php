<?php
    $link = mysqli_connect('localhost', 'root', '', 'myfriend');
    if (!$link){
        exit("disconnected from database.");
    }

    $sql = "SELECT * FROM friend";
    $ressult = mysqli_query($link, $sql);
    echo "<table border = '1'>";
        while ($data = mysqli_fetch_array($ressult)){
            echo "<tr>";
                echo "<td>{$data['id']}</td>";
                echo "<td>{$data['name']}</td>";
                echo "<td>{$data['phone']}</td>";
                echo "<td><a href='myfriendedit.php?id={$data['id']}'>edit</a></td>";
                echo "<td><a href='myfrienddelete.php?id={$data['id']}'>delete</a></td>";
            echo "</tr>";
        }
    echo "</table>";
        mysqli_close($link);
        echo "<a href=myfriendinsert.html>insert newfriend</a>";
?>