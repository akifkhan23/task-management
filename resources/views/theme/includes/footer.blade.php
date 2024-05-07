<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2023<a class="ml-25" href="#" target="_blank">INPL</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span>    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->
<script src="https://polyfill.io/v3/polyfill.js?features=default"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initAutocomplete&libraries=places&v=weekly"
      defer>
    </script>

<!-- Edit Column Modal -->
<div class="modal fade" id="new-folder-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Select Field</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" class="form-control mab" placeholder="Search" />
                <button type="button" class="btn btn-black mr-1">Lead Fields</button>
                <div class="mt">

                    <div class="title-wrapper bor-b">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1"></label>
                            <span class="todo-title">Account</span>
                        </div>
                    </div>

                    <div class="title-wrapper bor-b">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2"></label>
                            <span class="todo-title">Account Name</span>
                        </div>
                    </div>

                    <div class="title-wrapper bor-b">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                            <label class="custom-control-label" for="customCheck3"></label>
                            <span class="todo-title">Address</span>
                        </div>
                    </div>


                    <div class="title-wrapper bor-b">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                            <label class="custom-control-label" for="customCheck4"></label>
                            <span class="todo-title">Address Type</span>
                        </div>
                    </div>

                    <div class="title-wrapper bor-b">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                            <label class="custom-control-label" for="customCheck5"></label>
                            <span class="todo-title">Annual Revnue</span>
                        </div>
                    </div>

                    <div class="title-wrapper bor-b">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                            <label class="custom-control-label" for="customCheck6"></label>
                            <span class="todo-title">budget</span>
                        </div>
                    </div>


                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary mr-1" data-dismiss="modal">Select</button>
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- Edit Column Modal End -->


<!-- Profile Setting Modal -->

<!-- Profile Setting Modal End -->




<!-- Create Lead Modal -->
<div class="modal fade" id="create-lead-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Lead</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <form class="example">
                            <label for="account-username">Contact</label>
                            <select class="fom-con" name="" id="">
                                <option value="">Hasan</option>
                                <option value="">Amir</option>
                                <option value="">Danish</option>
                                <option value="">Safeer</option>
                            </select>
                            <a href="#" class="fom-con-btn" data-toggle="modal" data-target="#add-contact-modal"><i class="fa-solid fa-plus"></i></a>
                        </form>
                    </div>
                    <div class="col-12 col-sm-12">
                        <div class="form-group">
                            <label for="account-username">Lead Title</label>
                            <input type="text" class="form-control" id="account-username" name="username" placeholder="Lead Title">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="account-name">Created On</label>
                            <input type="text" class="form-control" id="account-name" name="name" placeholder="Created On">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="account-name">Status</label>
                            <select name="" id="" class="form-control">
                                <option value="">0</option>
                                <option value="">1</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="account-name">Source</label>
                            <select name="" id="" class="form-control">
                                <option value="">0</option>
                                <option value="">1</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="account-e-mail">Lad Amount</label>
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12">
                        <div class="form-group">
                            <label for="account-name">Comments</label>
                            <textarea name="" class="form-control" id="" cols="30" rows="4" placeholder="Write your comment here..."></textarea>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="account-name">Assigned To:</label>
                            <input type="text" class="form-control" id="account-name" name="name" placeholder="job Tiltle">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="account-name">Tags</label>
                            <select name="" id="" class="form-control">
                                <option value="">#1</option>
                                <option value="">#2</option>
                            </select>
                        </div>
                    </div>


                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary mr-1" data-dismiss="modal">Save</button>
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- Create Lead Modal End -->


<!-- Add Contect Modal -->
<div class="modal fade" id="add-contact-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="account-username">First Name</label>
                            <input type="text" class="form-control" id="account-username" name="username" placeholder="First Name">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="account-name">Last Name</label>
                            <input type="text" class="form-control" id="account-name" name="name" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="account-username">Contact No:</label>
                            <input type="text" class="form-control" id="account-username" name="username" placeholder="Contact No:">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="account-name">Email</label>
                            <input type="email" class="form-control" id="account-name" name="name" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12">
                        <div class="form-group">
                            <label for="account-name">Company</label>
                            <input type="email" class="form-control" id="account-name" name="name" placeholder="Company">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary mr-1" data-dismiss="modal">Save</button>
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- Add Contect Modal End -->


<!-- Import Leads Modal -->
<div class="modal fade" id="import-leads-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Leads</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <ul>
                            <li>
                                <img src="" alt="">
                            </li>
                            <li>
                                <h1></h1>
                            </li>
                            <li>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary mr-1" data-dismiss="modal">Save</button>
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- Import Leads Modal End -->




