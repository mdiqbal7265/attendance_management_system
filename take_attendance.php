<?php 

    include "db.php";

    // $action = $_POST['action'] ?? '';

    if(isset($_POST));
    {
        $c_date = $_POST['current_date'] ?? '';
        if(isset($_POST['present']))
        {
            $present = implode(', ', $_POST['present']);
        }else{
            $present = "No Data";
        }

        $sql = "INSERT INTO attendance(roll,date)VALUES('{$present}','{$c_date}')";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "<div class='alert alert-success'>Attendance taken succesfully!</div>";
        }else{
            echo "<div class='alert alert-danger'>Something went wrong!".mysqli_error($conn)."</div>";
        }

        // print_r($_POST);
    }
    
    
?>