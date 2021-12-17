$(document).ready(function () {

    // show data using AJAX request
    function showdata()
    {
        output = "";
        $.ajax({
            type: "GET",
            url: "show_student.php",
            dataType: "json",
            success: function (response) {
                if(response){
                    x = response;
                }else{
                    x = "";
                }

                for(i = 0; i < x.length; i++)
                {
                    output += "<tr><td>"+ x[i].roll + 
                    "</td><td>"+ x[i].name +
                    "</td><td><img class='img-thumbnail' width='100px' height='100px' src=img/"+ x[i].image+
                    "/></td></tr>";
                }

                $("#student_data").html(output);

                // console.log(response);
            }
        });
    }

    showdata();

    // Show take attendance form
    function showdata_for_take_attendance()
    {
        output = "";
        $.ajax({
            type: "GET",
            url: "show_student.php",
            dataType: "json",
            success: function (response) {
                if(response){
                    x = response;
                }else{
                    x = "";
                }

                for(i = 0; i < x.length; i++)
                {
                    output += "<tr><td>"+ x[i].roll + 
                    "</td><td>"+ x[i].name +
                    "</td><td><div class='form-check'><input value='"+ x[i].roll +"' type='checkbox' name='present[]' class='form-check-input'></div></td></tr>";
                }
                
               
            

                $("#take_attendance_body").html(output);

                // console.log(response);
            }
        });
    }

    showdata_for_take_attendance();

    $("#take_attendance").click(function (e) { 
        e.preventDefault();
        showdata_for_take_attendance();      
    });

    $("#attendance_student_form").on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "take_attendance.php",
            data: new FormData(this),
            contentType : false,
            cache : false,
            processData : false,
            success: function (response) {
                $("#msg").html(response);
                $("#attendance_student_form")[0].reset();
                $("#attendance_modal").modal('toggle');
            }
        });
    });


    // Add student Form
    $("#add_student_form").on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "add_student.php",
            data: new FormData(this),
            contentType : false,
            cache : false,
            processData : false,
            success: function (response) {
                $("#msg").html(response);
                $("#add_student_form")[0].reset();
                $("#add_student_modal").modal("toggle");
                showdata();
            }
        });
    });
});