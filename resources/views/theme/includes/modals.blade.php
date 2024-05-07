<div class="modal fade" id="settings">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer hide">
                <button type="button" class="btn btn-primary mr-1" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Reset</button>
            </div>
        </div>
    </div>
</div>

@section('script')

<script>


function openModal(url, title,status) {
    $('#settings').modal('show');

    // Use jQuery AJAX to fetch modal content
    $.ajax({
        url: url,
        method: 'GET',
        data:{status:status},
        success: function (data) {
            // Inject modal content into the page
            $('.modal-body').html(data);

            // Scripts in the loaded content will be automatically executed
        },
        error: function (xhr, status, error) {
            // Handle errors if necessary
            console.error("Error loading content:", error);
        }
    });
}

function deleteTask(url,id,instance)
{
    $.ajax({
        url: url,
        method: 'GET',
        data:{id:id},
        success: function (data) {
       
            $(instance).closest('.li-body').remove();

            // Scripts in the loaded content will be automatically executed
        },
        error: function (xhr, status, error) {
            // Handle errors if necessary
            console.error("Error loading content:", error);
        }
    });
}


</script>


@endsection
