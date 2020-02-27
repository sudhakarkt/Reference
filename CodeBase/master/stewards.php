<!doctype html>
<html lang="en">
    
<?php include 'master-head-files.php';?>

<body>

    <?php include 'master-header.php';?>

    <!-- Wrapper -->
    <section>
        <div class="container-fluid">
            <!-- Body Content -->
            <h2 class="title">Stewards</h2>
            <div class="main-container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Vendor <span class="mandatory">*</span></label>
                            <select class="form-control">
                                <option>Select</option>
                                <option>Northern Eastern</option>
                                <option>Middle East</option>
                                <option>South East</option>
                            </select>
                            </div>
                    </div>
                    <div class="col-md-9 align-self-center text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ImportCSVModal">Import from CSV</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Vendor</th>
                                        <th>Employee ID</th>
                                        <th>Internal ID</th>
                                        <th>Login Name</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last name</th>
                                        <th>Gender</th>
                                        <th>Age</th>
                                        <th>Mobile</th>
                                        <th>Proof Details</th>
                                        <th>Document No</th>
                                        <th>Proof Document</th>
                                        <th>Active/Inactive</th>
                                        <th style="width:8%" class="text-right"><a href="javascript:void(0);" class="action" data-toggle="modal" data-target="#AddStewardsModal" title="Add"><img src="../images/add-item.svg" width="25" /></a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Vendor 1</td>
                                        <td>213</td>
                                        <td>895698</td>
                                        <td>Login Name 1</td>
                                        <td>First Name 1</td>
                                        <td>Middle Name 2</td>
                                        <td>Last Name 1</td>
                                        <td>Male</td>
                                        <td>26</td>
                                        <td>986 898 5698</td>
                                        <td>Driving License</td>
                                        <td>26598</td>
                                        <td>Document 1</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#DeleteModal" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Vendor 1</td>
                                        <td>213</td>
                                        <td>895698</td>
                                        <td>Login Name 1</td>
                                        <td>First Name 1</td>
                                        <td>Middle Name 2</td>
                                        <td>Last Name 1</td>
                                        <td>Male</td>
                                        <td>26</td>
                                        <td>986 898 5698</td>
                                        <td>Driving License</td>
                                        <td>26598</td>
                                        <td>Document 1</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Save"><img src="../images/save.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Cancel"><img src="../images/cancel.svg" width="25"></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Import CSV Modal -->
    <div class="modal fade" id="ImportCSVModal" tabindex="-1" role="dialog" aria-labelledby="ImportCSVModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="ImportCSVModalTitle">Import CSV</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body"><!--p-5-->
                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-3 text-left">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Select CSV File</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-md-4">Vendor <span class="mandatory">*</span></label>
                                <div class="col-md-8">
                                    <select class="form-control">
                                        <option>Select</option>
                                        <option>Northern Eastern</option>
                                        <option>Middle East</option>
                                        <option>South East</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-md-4">Access Role <span class="mandatory">*</span></label>
                                    <div class="col-md-8">
                                        <select class="form-control">
                                            <option>Select</option>
                                            <option>Northern Eastern</option>
                                            <option>Middle East</option>
                                            <option>South East</option>
                                        </select>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <table class="table text-left mb-3">
                        <thead>
                            <tr>
                                <th style="width:5%"></th>
                                <th class="text-center" style="width:5%">#</th>
                                <th style="width:15%">Login Name</th>
                                <th style="width:15%">First Name</th>
                                <th style="width:15%">Middle Name</th>
                                <th style="width:15%">Last Name</th>
                                <th style="width:11%">Sex</th>
                                <th style="width:9%">Age</th>
                                <th style="width:10%">Mobile</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>Name 1</td>
                                <td>Name 1</td>
                                <td>Name 1</td>
                                <td>Name 1</td>
                                <td>Male</td>
                                <td>25</td>
                                <td>9876543210</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>Name 1</td>
                                <td>Name 1</td>
                                <td>Name 1</td>
                                <td>Name 1</td>
                                <td>Male</td>
                                <td>25</td>
                                <td>9876543210</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row small-btn text-right">
                        <div class="col-md-3 offset-md-9">
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

    <!-- Add Stewards Modal -->
    <div class="modal fade" id="AddStewardsModal" tabindex="-1" role="dialog" aria-labelledby="AddStewardsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AddStewardsModalLabel">Add Stewards</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row add-template">
                        <div class="col">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Employee ID <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Login Name <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>First Name <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Middle Name <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Last Name <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Gender <span class="mandatory">*</span></label>
                                        <div class="btn-inline-container row">
                                            <button type="button" class="col btn btn-primary selected">Male</button>
                                            <button type="button" class="col btn btn-primary ml-1">Female</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Date of Birth <span class="mandatory">*</span></label>
                                            <input type="text" id="datepicker1" class="form-control" />
                                        </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Mobile <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Proof Document <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Document Number<span class="mandatory">*</span></label>
                                        <input type="text" class="form-control">
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
    
    <?php include '../delete-popup.php';?>

    <?php include 'master-scripts.php';?>
    
</body>
</html>