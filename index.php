<?php include "db.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Management System</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="bg-info text-center text-white p-2 mb-2">Attendance Management System</h2>
                <div class="card border-info">
                    <div class="card-header bg-dark text-white border-dark">
                        <h2 class="card-title float-start">Student List</h2>
                        <button id="take_attendance" class="btn btn-success btn-sm float-end ms-2" data-bs-toggle="modal" data-bs-target="#attendance_modal"><i data-feather="edit"></i><span class="ms-1">Take Attendance</span></button>

                        <button id="add_student" class="btn btn-danger btn-sm float-end text-white" data-bs-toggle="modal" data-bs-target="#add_student_modal"><i data-feather="plus-circle"></i><span class="ms-1">Add Student</span></button>
                    </div>
                    <div class="m-3" id="msg"></div>                    
                        <div class="card-body">
                            <table class="table table-bordered border-primary text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">Roll</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Photo</th>
                                    </tr>
                                </thead>
                                <tbody id="student_data">
                                    
                                </tbody>
                            </table>
                        </div>                   
                </div>
            </div>
        </div>
    </div>

    <!--Take Attendanc Modal -->
    <div class="modal fade" id="attendance_modal" tabindex="-1" aria-labelledby="attendance_modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="attendance_modalLabel">Take Attendance</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="attendance_student_form" class="" method="post">
                    <div class="modal-body">
                    
                        <div class="text-center">
                            <div class="form-group m-2">
                                <input type="date" name="current_date" id="date" class="col-3 form-control">
                            </div>
                        </div>
                        <hr>
                        <table class="table table-bordered border-primary text-center">
                            <thead>
                                <tr>
                                    <th style="width: 40%;" scope="col">Roll</th>
                                    <th style="width: 40%;" scope="col">Name</th>
                                    <th style="width: 20%;" scope="col">Attendance</th>
                                </tr>
                            </thead>
                            <tbody id="take_attendance_body">
                                
                            </tbody>
                        </table>   
                                   
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <!-- <button type="submit" id="attendance_btn" class="btn btn-primary">Take attendance</button>                  -->
                        <input type="submit" name="submit" value="submit" class="btn btn-primary">
                    </div>
                </form> 
            </div>
        </div>
    </div>

    <!-- Take Attaendance modl end -->

    <!-- Add Student Modal -->
    <div class="modal fade" id="add_student_modal" tabindex="-1" aria-labelledby="add_student_modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add_student_modalLabel">Add Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="add_student_form" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="roll" class="form-label">Roll/ID no</label>
                                <input type="number" name="roll" class="form-control" id="roll" required>
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="form-label">Student Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                        </div>                       
                        <div class="col-md-6">
                            <label for="name" class="form-label">Student Image</label>
                            <input type="file" name="student_image" class="form-control" id="student_image" required>
                        </div>
                   
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <!-- <button type="submit" class="btn btn-primary" id="add_student_btn">Add Student</button> -->
                        <input type="text" name="action" value="add_atudent" style="display: none;">
                        <input type="submit" value="Insert" id="add_student_btn" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Add Student Modal -->


    <!-- Script file -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>  
    <script src="js/script.js"></script>
    <script>
        feather.replace()
    </script>
</body>

</html>