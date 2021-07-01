$(document).ready(function () {

    //Create 
    $("#create").click(function (event) {
        event.preventDefault();
//        tinymce.triggerSave();
        if (!$('#name').val() || $('#name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#country').val() || $('#country').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter   country..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#image').val() || $('#image').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter  image..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#comment').val() || $('#comment').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter comment..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else if ($('#title').val().includes("'")) {
            swal({
                title: "Error!",
                text: "Sorry, Invalid character found ( ' ) in title. Please remove that character.",
                type: 'error',
                timer: 3500,
                showConfirmButton: false
            });
        } else if ($('#country').val().includes("'")) {
            swal({
                title: "Error!",
                text: "Sorry, Invalid character found ( ' ) in country. Please remove that character.",
                type: 'error',
                timer: 3500,
                showConfirmButton: false
            });
        } else if ($('#comment').val().includes("'")) {
            swal({
                title: "Error!",
                text: "Sorry, Invalid character found ( ' ) in description. Please remove that character.",
                type: 'error',
                timer: 3500,
                showConfirmButton: false
            });
        } else {
            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "ajax/comment.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {
                    swal({
                        title: "Success!",
                        text: "Your feedback was submitted successfully!.....",
                        type: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }, function () {
                        setTimeout(function () {
                            window.location.replace("customer-feedback.php");
                        }, 1500);
                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });

    

    //update
    ;
});