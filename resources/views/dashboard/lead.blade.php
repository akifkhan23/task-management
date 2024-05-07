@extends('theme.default')
@section('content')
<!-- BEGIN: Content-->

    
<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <div class="table-responsive">
                                <div class="col-md-12 tab-header">
                                    <div class="sec-header2">
                                        <div class="row align-items-center">
                                            <div class="col-md-2">
                                                <h3>Lead</h3>
                                            </div>
                                            <div class="col-md-8">
                                                <a href="#" class="btna1" data-toggle="modal" data-target="#create-lead-modal">Create Lead <i class="fa-solid fa-chevron-right"></i></a>
                                                <a href="#" class="btnb pl" data-toggle="modal" data-target="#import-leads-modal">import Leads</a> 
                                                <a href="#" class="btna pl">Scan Buisness Card</a> 
                                                <input class="fom2" type="text" name="" placeholder="Filter and search">
                                            </div>
                                            <div class="col-md-2 head3 text-right">
                                                <a href="#" data-toggle="modal" data-target="#new-folder-modal"><i class="fa-solid fa-file-pen"></i> Edit Columns</a>
                                                <a href="#"><i class="fa-solid fa-filter"></i> Filter</a>
                                            </div>
                                        </div>
                                    </div>		
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="b-top">
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            </th>
                                            <th>Lead Name</th>
                                            <th>Lead Title</th>
                                            <th>Company</th>
                                            <th>Activity</th>
                                            <th>Source</th>
                                            <th>Amount</th>
                                            <th>Lead Created</th>
                                            <th>Assigned To</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            </td>
                                            <td class="lead-n">Carisa Kidman <br><span>carissakidman@gmail.com</span> <br><span class="span2">NEW LEAD</span></td>
                                            <td>Need for our products</td>
                                            <td>USGC Logistics</td>
                                            <td>N/A</td>
                                            <td>Customer</td>
                                            <td>PKR 100,000</td>
                                            <td>30-10-2023</td>
                                            <td>Patrica Boyle</td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            </td>
                                            <td class="lead-n">Carisa Kidman <br><span>carissakidman@gmail.com</span> <br><span class="span2">NEW LEAD</span></td>
                                            <td>Need for our products</td>
                                            <td>USGC Logistics</td>
                                            <td>N/A</td>
                                            <td>Customer</td>
                                            <td>PKR 100,000</td>
                                            <td>30-10-2023</td>
                                            <td>Patrica Boyle</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            </td>
                                            <td class="lead-n">Carisa Kidman <br><span>carissakidman@gmail.com</span> <br><span class="span2">NEW LEAD</span></td>
                                            <td>Need for our products</td>
                                            <td>USGC Logistics</td>
                                            <td>N/A</td>
                                            <td>Customer</td>
                                            <td>PKR 100,000</td>
                                            <td>30-10-2023</td>
                                            <td>Patrica Boyle</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            </td>
                                            <td class="lead-n">Carisa Kidman <br><span>carissakidman@gmail.com</span> <br><span class="span2">NEW LEAD</span></td>
                                            <td>Need for our products</td>
                                            <td>USGC Logistics</td>
                                            <td>N/A</td>
                                            <td>Customer</td>
                                            <td>PKR 100,000</td>
                                            <td>30-10-2023</td>
                                            <td>Patrica Boyle</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            </td>
                                            <td class="lead-n">Carisa Kidman <br><span>carissakidman@gmail.com</span> <br><span class="span2">NEW LEAD</span></td>
                                            <td>Need for our products</td>
                                            <td>USGC Logistics</td>
                                            <td>N/A</td>
                                            <td>Customer</td>
                                            <td>PKR 100,000</td>
                                            <td>30-10-2023</td>
                                            <td>Patrica Boyle</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            </td>
                                            <td class="lead-n">Carisa Kidman <br><span>carissakidman@gmail.com</span> <br><span class="span2">NEW LEAD</span></td>
                                            <td>Need for our products</td>
                                            <td>USGC Logistics</td>
                                            <td>N/A</td>
                                            <td>Customer</td>
                                            <td>PKR 100,000</td>
                                            <td>30-10-2023</td>
                                            <td>Patrica Boyle</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            </td>
                                            <td class="lead-n">Carisa Kidman <br><span>carissakidman@gmail.com</span> <br><span class="span2">NEW LEAD</span></td>
                                            <td>Need for our products</td>
                                            <td>USGC Logistics</td>
                                            <td>N/A</td>
                                            <td>Customer</td>
                                            <td>PKR 100,000</td>
                                            <td>30-10-2023</td>
                                            <td>Patrica Boyle</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            </td>
                                            <td class="lead-n">Carisa Kidman <br><span>carissakidman@gmail.com</span> <br><span class="span2">NEW LEAD</span></td>
                                            <td>Need for our products</td>
                                            <td>USGC Logistics</td>
                                            <td>N/A</td>
                                            <td>Customer</td>
                                            <td>PKR 100,000</td>
                                            <td>30-10-2023</td>
                                            <td>Patrica Boyle</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            </td>
                                            <td class="lead-n">Carisa Kidman <br><span>carissakidman@gmail.com</span> <br><span class="span2">NEW LEAD</span></td>
                                            <td>Need for our products</td>
                                            <td>USGC Logistics</td>
                                            <td>N/A</td>
                                            <td>Customer</td>
                                            <td>PKR 100,000</td>
                                            <td>30-10-2023</td>
                                            <td>Patrica Boyle</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            </td>
                                            <td class="lead-n">Carisa Kidman <br><span>carissakidman@gmail.com</span> <br><span class="span2">NEW LEAD</span></td>
                                            <td>Need for our products</td>
                                            <td>USGC Logistics</td>
                                            <td>N/A</td>
                                            <td>Customer</td>
                                            <td>PKR 100,000</td>
                                            <td>30-10-2023</td>
                                            <td>Patrica Boyle</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            </td>
                                            <td class="lead-n">Carisa Kidman <br><span>carissakidman@gmail.com</span> <br><span class="span2">NEW LEAD</span></td>
                                            <td>Need for our products</td>
                                            <td>USGC Logistics</td>
                                            <td>N/A</td>
                                            <td>Customer</td>
                                            <td>PKR 100,000</td>
                                            <td>30-10-2023</td>
                                            <td>Patrica Boyle</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            </td>
                                            <td class="lead-n">Carisa Kidman <br><span>carissakidman@gmail.com</span> <br><span class="span2">NEW LEAD</span></td>
                                            <td>Need for our products</td>
                                            <td>USGC Logistics</td>
                                            <td>N/A</td>
                                            <td>Customer</td>
                                            <td>PKR 100,000</td>
                                            <td>30-10-2023</td>
                                            <td>Patrica Boyle</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            </td>
                                            <td class="lead-n">Carisa Kidman <br><span>carissakidman@gmail.com</span> <br><span class="span2">NEW LEAD</span></td>
                                            <td>Need for our products</td>
                                            <td>USGC Logistics</td>
                                            <td>N/A</td>
                                            <td>Customer</td>
                                            <td>PKR 100,000</td>
                                            <td>30-10-2023</td>
                                            <td>Patrica Boyle</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            </td>
                                            <td class="lead-n">Carisa Kidman <br><span>carissakidman@gmail.com</span> <br><span class="span2">NEW LEAD</span></td>
                                            <td>Need for our products</td>
                                            <td>USGC Logistics</td>
                                            <td>N/A</td>
                                            <td>Customer</td>
                                            <td>PKR 100,000</td>
                                            <td>30-10-2023</td>
                                            <td>Patrica Boyle</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            </td>
                                            <td class="lead-n">Carisa Kidman <br><span>carissakidman@gmail.com</span> <br><span class="span2">NEW LEAD</span></td>
                                            <td>Need for our products</td>
                                            <td>USGC Logistics</td>
                                            <td>N/A</td>
                                            <td>Customer</td>
                                            <td>PKR 100,000</td>
                                            <td>30-10-2023</td>
                                            <td>Patrica Boyle</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            </td>
                                            <td class="lead-n">Carisa Kidman <br><span>carissakidman@gmail.com</span> <br><span class="span2">NEW LEAD</span></td>
                                            <td>Need for our products</td>
                                            <td>USGC Logistics</td>
                                            <td>N/A</td>
                                            <td>Customer</td>
                                            <td>PKR 100,000</td>
                                            <td>30-10-2023</td>
                                            <td>Patrica Boyle</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            </td>
                                            <td class="lead-n">Carisa Kidman <br><span>carissakidman@gmail.com</span> <br><span class="span2">NEW LEAD</span></td>
                                            <td>Need for our products</td>
                                            <td>USGC Logistics</td>
                                            <td>N/A</td>
                                            <td>Customer</td>
                                            <td>PKR 100,000</td>
                                            <td>30-10-2023</td>
                                            <td>Patrica Boyle</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
    @endsection    