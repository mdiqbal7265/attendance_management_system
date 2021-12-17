<?php

    include "db.php";

    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)
    {
        $data = array();
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
    }
    echo json_encode($data);



?>