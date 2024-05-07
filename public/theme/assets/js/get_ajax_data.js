function get_ajax_data() {

    var form = $('#list_data');
    var actionUrl = form.attr('action');
    $('.loader-container').show();
    $('#response').html('');
    $.ajax({
        type: "get",
        url: actionUrl,
        data: form.serialize(), // serializes the form's elements.
        async: true,
        cache: false,
        success: function(data) {

            $('.loader-container').hide();
            $('#response').html(data);
        }
    });
}
