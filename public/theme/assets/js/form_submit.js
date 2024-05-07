

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


// generalize submit
$(document).on('submit', '#subm', function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.
     var validate =  validation();

     if (validate == false)
     {
        return;
     }
    $(".print-error-msg").find("ul").html('');
    $(".alert-success").find("ul").html('');

    var form = $(this);
    var actionUrl = form.attr('action');
    var formData = new FormData(form[0]);
    $('.loader-container').show();
    $.ajax({
        type: "POST",
        url: actionUrl,
        data: formData, // serializes the form's elements.
        processData: false,  // Important: Prevent jQuery from processing the data.
        contentType: false,

        success: function(data) {

            $('.loader-container').hide();
           console.log(data.success+'amir');

            if (data.catchError) {
                $(".alert-danger").removeClass("hide");
                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display', 'block');
                $(".print-error-msg").find("ul").append('<li>' + data.catchError + '</li>');

            }
            if ($.isEmptyObject(data.error)) {

                $(".alert-success").removeClass("hide");
                $(".alert-success").html(data.success);
                $("#subm").trigger("reset");


            } else {
                printErrorMsg(data.error);
            }
        },
        error: function(xhr, status, error) {
            // Handle errors here
            $('.loader-container').hide();
            console.log(error); // Log the error message for debugging

            // You can also display an error message to the user or take other actions as needed.
        }
    });

});

 function printErrorMsg(msg) {

        $(".print-error-msg").find("ul").html('');
        $(".print-error-msg").css('display', 'block');
        $.each(msg, function(key, value) {

            $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
            window.scrollTo(0, 0);
        });
    }

    function validation()
	{
		var required = document.getElementsByClassName('required');

		for (i = 0; i < required.length; i++) {
			var rf = required[i].id;


			if ($('#' + rf).val() == '') {
				$('#' + rf).css('border-color', 'red');
				$('#' + rf).focus();
				validate = 1;
			//	alert(rf + ' ' + 'Required');
				event.preventDefault();
				return false;

			}
			else {

				$('#' + rf).css('border-color', '#ccc');
				validate = 0;
			}
		}
	}


