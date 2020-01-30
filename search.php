<?php
    $name=$_GET['name'];
    $array = array();
    $con=mysqli_connect("localhost","root","","personnal");
    $query=mysqli_query($con, "select * from users where name LIKE '%{$name}%'");
    while($row=mysqli_fetch_assoc($query))
    {
      $array[] = $row['name'];
    }
    echo json_encode($array);
    mysqli_close($con);
?>