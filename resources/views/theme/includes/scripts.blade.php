<script src="{{ URL::asset('theme/assets/js/jquery.js') }}"></script>
<script src="{{ URL::asset('theme/assets/js/safeer.js') }}"></script>


<script src="{{ URL::asset('theme/assets/js/core/app-menu.js') }}"></script>
{{-- <script>console.log('was here')</script> --}}
<script>
new WOW().init();
</script>

<!-- BEGIN: Vendor JS-->
    <script src="{{ URL::asset('theme/assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->
    <script src="{{ URL::asset('theme/assets/js/scripts/components/components-modals.js') }}"></script>
    <script src="{{ URL::asset('theme/assets/js/scripts/components/components-navs.min.js') }}"></script>

    <!-- BEGIN: Theme JS-->
    <script src="{{ URL::asset('theme/assets/js/core/app.js') }}"></script>
    <script src="{{ URL::asset('theme/assets/js/core/app.min.js') }}"></script>
    <script src="{{ URL::asset('theme/assets/js/core/app-menu.min.js') }}"></script>
    <script src="{{ URL::asset('theme/assets/js/scripts/customizer.min.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page Vendor JS-->
    {{-- <script src="{{ URL::asset('theme/assets/vendors/js/charts/apexcharts.min.js') }}"></script> --}}
    <script src="{{ URL::asset('theme/assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <script src="{{ URL::asset('theme/assets/vendors/js/editors/quill/katex.min.js') }}"></script>
    <script src="{{ URL::asset('theme/assets/vendors/js/editors/quill/highlight.min.js') }}"></script>
    <script src="{{ URL::asset('theme/assets/vendors/js/editors/quill/quill.min.js') }}"></script>
    <script src="{{ URL::asset('theme/assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ URL::asset('theme/assets/js/scripts/forms/form-select2.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    {{-- <script src="{{ URL::asset('theme/assets/js/scripts/pages/dashboard-ecommerce.js') }}"></script> --}}
    <script src="{{ URL::asset('theme/assets/js/scripts/charts/chart-apex.js') }}"></script>
    <script src="{{ URL::asset('theme/assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ URL::asset('theme/assets/js/scripts/pages/app-email.js') }}"></script>
    {{-- <script src="{{ URL::asset('theme/assets/js/map.js') }}"></script> --}}
    <script src="{{ URL::asset('theme/assets/js/form_submit.js') }}"></script>
    <script src="{{ URL::asset('theme/assets/js/get_ajax_data.js') }}"></script>

    <!-- END: Page JS-->
<script src="{{ URL::asset('theme/assets/js/custom.js') }}"></script>




    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>

<script>
    function updateLead(id,status)
{

    $.ajax({
        url: "{{route('update_status')}}",
        method: 'GET',
        data:{id:id ,status: status},
        success: function (data) {

        },
        error: function (xhr, status, error) {
            // Handle errors if necessary
            console.error("Error loading content:", error);
        }
    });
}
</script>