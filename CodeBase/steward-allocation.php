<!doctype html>
<html lang="en">

<?php include 'head-files.php';?>

<body>

    <?php include 'header.php';?>

    <!-- Wrapper -->
    <section class="slide-out">
        <!-- Body Content -->
        <div class="container-fluid">
            <h2 class="title">Steward Allocation</h2>
            <div class="main-container">

                <?php include 'toaster.php';?>

                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width:7%;" class="text-center">#</th>
                                        <th style="width:10%;">Section</th>
                                        <th style="width:10%;">Floor</th>
                                        <th style="width:10%;">Zone</th>
                                        <th style="width:8%;">Position</th>
                                        <th style="width:12%;">Certification Reqd</th>
                                        <th style="width:15%;">Certification</th>
                                        <th style="width:8%;">Vendor</th>
                                        <th style="width:10%;">Requested Qty</th>
                                        <th style="width:5%;" class="text-center">Allocate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Section 1</td>
                                        <td>Floor 1</td>
                                        <td>Zone 1</td>
                                        <td>Position 1</td>
                                        <td>Yes</td>
                                        <td>Cert 1, Cert 2, Cert 3, Cert 4...</td>
                                        <td>Vendor 1</td>
                                        <td>1</td>
                                        <td class="text-center">
                                            <a href="javascript:void(0);" class="action-icon" data-toggle="modal" data-target="#StewardAllocationModal" title="Allocate"><img src="images/allocate-plus.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td class="text-center">2</td>
                                        <td>Section 1</td>
                                        <td>Floor 1</td>
                                        <td>Zone 1</td>
                                        <td>Position 1</td>
                                        <td>Yes</td>
                                        <td>Cert 1, Cert 2, Cert 3, Cert 4...</td>
                                        <td>Vendor 1</td>
                                        <td>1</td>
                                        <td class="text-center">
                                            <a href="javascript:void(0);" class="action-icon" data-toggle="modal" data-target="#StewardAllocationModal" title="Allocate"><img src="images/allocate-plus.svg" width="25"></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-3">
                    <div class="col action-buttons">
                        <div class="form-group">
                            <div class="btn-group">
                                <a class="btn btn-secondary updatenext" href="javascript:void(0);">Cancel</a>
                            </div>
                            <div class="btn-group ml-3">
                                <a class="btn btn-primary updatenext" href="javascript:void(0);">Submit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'events-menu.php';?>
        
    </section>
    
    <!-- Steward Allocation Modal -->
    <div class="modal fade" id="StewardAllocationModal" tabindex="-1" role="dialog" aria-labelledby="StewardAllocationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="StewardAllocationModalLabel">Allocate Steward</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row ml-0 mr-0 mb-4">
                        <div class="col-md-2 steward-value">
                            <label>Vendor - </label>
                            Vendor 1
                        </div>
                        <div class="col-md-2 steward-value">
                            <label>Section - </label>
                            Section 1
                        </div>
                        <div class="col-md-2 steward-value">
                            <label>Floor - </label>
                            Floor 1
                        </div>
                        <div class="col-md-2 steward-value">
                            <label>Zone - </label>
                            Zone 1
                        </div>
                        <div class="col-md-2 steward-value">
                            <label>Position - </label>
                            Position 1
                        </div>
                        <div class="col-md-2 steward-value">
                            <label>Requested Quantity - </label>
                            10
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Employee ID</th>
                                            <th>Internal ID</th>
                                            <th>Login Name</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>Mobile</th>
                                            <th>Proof Details</th>
                                            <th>Document No</th>
                                            <th>Proof Document</th>
                                            <th style="width:9%" class="text-right"><a href="javascript:void(0);" class="action additem" title=""><img src="images/add-item.svg" width="25" /></a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>213</td>
                                            <td>34234</td>
                                            <td>Login Name 1</td>
                                            <td>Name 1</td>
                                            <td>Name 2</td>
                                            <td>Name 1</td>
                                            <td>Male</td>
                                            <td>26</td>
                                            <td>986 555 8665</td>
                                            <td>Driving License</td>
                                            <td>23659</td>
                                            <td>Document 1</td>
                                            <td class="text-right">
                                                <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="images/edit.svg" width="25"></a>
                                                <a href="javascript:void(0);" class="action-icon" data-toggle="modal" data-target="#DeleteModal" title="Delete"><img src="images/delete.svg" width="25"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>213</td>
                                            <td>34234</td>
                                            <td>Login Name 1</td>
                                            <td>Name 1</td>
                                            <td>Name 2</td>
                                            <td>Name 1</td>
                                            <td>Male</td>
                                            <td>26</td>
                                            <td>986 555 8665</td>
                                            <td>Driving License</td>
                                            <td>23659</td>
                                            <td>Document 1</td>
                                            <td class="text-right">
                                                <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="images/edit.svg" width="25"></a>
                                                <a href="javascript:void(0);" class="action-icon" data-toggle="modal" data-target="#DeleteModal" title="Delete"><img src="images/delete.svg" width="25"></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row ml-0 mr-0 mb-3">
                        <div class="col-md-3 align-self-end">
                            <div class="form-group m-0">
                                <div class="form-control">Existing Stewards?
                                    <label class="switch float-right">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 align-self-center">
                            <div class="form-group mb-0">
                                <label>Select Steward </label>
                                <select disabled class="form-control">
                                    <option>Select</option>
                                    <option>Northern Eastern</option>
                                    <option>Middle East</option>
                                    <option>South East</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row add-template inner-add-template">
                        <div class="col">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Employee ID <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Login Name <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>First Name <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Middle Name <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Last Name <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Gender </label>
                                        <div class="btn-inline-container row">
                                            <button type="button" class="col btn btn-primary selected">Male</button>
                                            <button type="button" class="col btn btn-primary ml-1">Female</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Date of Birth <span class="mandatory">*</span></label>
                                        <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                                            <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                                <div class="input-group-text"><img src="images/calendar.svg" width="20" /></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 align-self-center">
                                    <label>Mobile <span class="mandatory">*</span></label>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Proof of Document <span class="mandatory">*</span></label>
                                        <select class="form-control">
                                            <option>Select</option>
                                            <option>Northern Eastern</option>
                                            <option>Middle East</option>
                                            <option>South East</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Document Number <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Upload Proof <span class="mandatory">*</span></label>
                                        <input type="file" class="form-control fileupload" id="customFile">
                                        <label class="custom-file-label" for="customFile"></label>
                                    </div>
                                </div>
                                <div class="col-md-3 align-self-end">
                                    <div class="form-group text-right">
                                        <div class="btn-group">
                                            <button type="button" data-dismiss="modal" class="btn btn-secondary cancel-btn">Cancel</button>
                                        </div>
                                        <div class="btn-group ml-3">
                                            <button type="button" data-dismiss="modal" class="btn btn-primary save-btn">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'delete-popup.php';?>

    <?php include 'scripts.php';?>

</body>
</html>