@php
    $users_data = Auth::user();
@endphp
<div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
    <form id="subm" method="post" action="{{ route('usersSetting.profile_update',$users_data->id) }}" enctype="multipart/form-data"  class="validate-form mt-2">
        @csrf
                                        <!-- header media -->
                                        <div class="media">
                                            <a href="javascript:void(0);" class="mr-25">
                                                <img src="assets/images/portrait/small/avatar-s-11.jpg" id="account-upload-img" class="rounded mr-50" alt="profile image" height="80" width="80" />
                                            </a>
                                            <!-- upload and reset button -->
                                            <div class="media-body mt-75 ml-1">
                                                <label for="account-upload" class="btn btn-sm btn-primary mb-75 mr-75">Upload</label>
                                                <input type="file" id="account-upload" name="image" hidden accept="image/*" />
                                                <button class="btn btn-sm btn-outline-secondary mb-75">Reset</button>
                                                <p>Allowed JPG, GIF or PNG. Max size of 800kB</p>
                                            </div>
                                            <!--/ upload and reset button -->
                                        </div>
                                        <!--/ header media -->

                                        <!-- form -->

                                            <div class="row">
                                                <div class="col-12 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="account-username">First Name</label>
                                                        <input type="text" class="form-control" id="account-username" name="first_name" value="{{ $users_data->first_name }}" placeholder="First Name" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="account-name">Last Name</label>
                                                        <input type="text" class="form-control" id="account-name" name="last_name"  value="{{ $users_data->last_name }}" placeholder="Last Name" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="account-name">Username</label>
                                                        <input type="text" class="form-control" id="account-name" name="username" value="{{ $users_data->user_name }}" placeholder="Username" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="account-e-mail">E-mail</label>
                                                        <input readonly type="email" class="form-control" id="account-e-mail" name="email" value="{{ $users_data->email }}" placeholder="Email" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="account-name">Contact No.</label>
                                                        <input type="text" class="form-control" id="account-name" name="contact_no" value="{{ $users_data->contact_no }}" placeholder="Contact No." />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="account-name">job Tiltle</label>
                                                        <input type="text" class="form-control" id="account-name" name="job_title" value="{{ $users_data->job_title }}" placeholder="job Tiltle" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4 hide">
                                                    <div class="form-group">
                                                        <label for="account-name">Time Zone</label>
                                                        <input type="time" class="form-control" id="account-name" name="name" placeholder="job Tiltle" />
                                                    </div>
                                                </div>

                                                <div class="text-center center" class="row">
                                                    <div class="col-12 text-center mt-3">
                                                        <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                                    </div>
                                                </div>


                                            </div>
                                        </form>
                                        <!--/ form -->
                                    </div>
