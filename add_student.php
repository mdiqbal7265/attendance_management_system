<?php

include "db.php";

if(isset($_POST) && is_array($_FILES))
    {
        $s_name = $_POST['name'] ?? '';
        $roll = $_POST['roll'] ?? '';
        if(is_uploaded_file($_FILES['student_image']['tmp_name']))
        {
            $source_path = $_FILES['student_image']['tmp_name'];
            $name = $_FILES['student_image']['name'];
            list($txt, $ext) = explode(".",$name);
            $image_name = time().".".$ext;
            $target_path = "img/".$image_name;

            if(move_uploaded_file($source_path, $target_path)){
                $sql = "INSERT INTO students (roll, name, image) VALUES('{$roll}','{$s_name}','{$image_name}')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    echo "<div class='alert alert-success'>Student Added Succcesfully!</div>";
                }else{
                    echo "<div class='alert alert-danger'>Student Not Added Succcesfully!  <span>".mysqli_error($conn)."</span></div>";
                }
            }else{
                echo "<div class='alert alert-success'>Something went wrong. Please Try again!</div>";
            }
        }
        
    }
