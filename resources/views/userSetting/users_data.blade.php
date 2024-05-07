

        <div class="row">

                    <form id="list_data" method="GET" action="{{ route('usersSetting.users_detail') }}">
                        <input type="hidden" name="value" id="value" value="" />
                    <div class="col-md-12 mb-2 mb-md-0">
                        <ul class="nav nav-pills">
                            <!-- User Details -->
                            <li onclick="set_val('users_detail')"  class="nav-item">
                                <a   class="nav-link active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                    <i data-feather="user" class="font-medium-3 mr-1"></i>
                                    <span class="font-weight-bold">User Details</span>
                                </a>
                            </li>
                            <!-- change password -->
                            <li onclick="set_val('change_password')" class="nav-item">
                                <a  class="nav-link" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                                    <i data-feather="lock" class="font-medium-3 mr-1"></i>
                                    <span  class="font-weight-bold">Change Password</span>
                                </a>
                            </li>
                            <!-- information -->
                            <li onclick="set_val('more_details')" class="nav-item">
                                <a class="nav-link" id="account-pill-info" data-toggle="pill" href="#account-vertical-info" aria-expanded="false">
                                    <i data-feather="info" class="font-medium-3 mr-1"></i>
                                    <span   class="font-weight-bold">More Details</span>
                                </a>
                            </li>
                            <!-- notification -->
                            <li onclick="set_val('security')" class="nav-item">
                                <a class="nav-link" id="account-pill-notifications" data-toggle="pill" href="#account-vertical-notifications" aria-expanded="false">
                                    <i class="fa-solid fa-shield-halved"></i>
                                    <span   class="font-weight-bold">Security</span>
                                </a>
                            </li>
                            <!-- social -->
                            <li onclick="set_val('history')" class="nav-item">
                                <a class="nav-link" id="account-pill-social" data-toggle="pill" href="#account-vertical-social" aria-expanded="false">
                                    <i data-feather="link" class="font-medium-3 mr-1"></i>
                                    <span  class="font-weight-bold">Login History</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </form>
                    <!--/ left menu section -->

                    <!-- right content section -->
                    <div class="col-md-12">
                        <div class="">
                            <div class="card-body">
                                <div class="tab-content">

                                    <span id="response"></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ right content section -->
                </div>



<script>

$( document ).ready(function() {
    set_val();
});

function set_val(data = 'users_detail')
{

    $('#value').val(data);
    get_ajax_data();
}

</script>


