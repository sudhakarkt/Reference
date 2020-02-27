<!doctype html>
<html lang="en">
    
<?php include 'master-head-files.php';?>

<body>

    <?php include 'master-header.php';?>

    <!-- Wrapper -->
    <section>
        <!-- Main Container -->
        <div class="container-fluid">
            <h2 class="title">PEAP's Template</h2>
            <div class="main-container">
                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width:5%;">#</th>
                                        <th style="width:10%;">Template Name</th>
                                        <th style="width:10%;">Event Category</th>
                                        <th style="width:10%;">Event Schedule</th>
                                        <th style="width:10%;">Applicable?</th>
                                        <th style="width:10%;">Submit before(No of Hours)</th>
                                        <th style="width:10%;">To be filled By</th>
                                        <th style="width:7%;"></th>
                                        <th style="width:7%;"><a href="javascript:void(0);" class="action" data-toggle="modal" data-target="#AddPeapsTemplateModal" title="Add" ><img src="../images/add-item.svg" width="25" /></a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Name 1</td>
                                        <td>All</td>
                                        <td>Multi Day Event</td>
                                        <td>Section</td>
                                        <td>8</td>
                                        <td>Event Role</td>
                                        <td><button type="button" data-toggle="modal" data-target="#AddChecklistModal" class="btn btn-primary border-radius">Add Checklist</button></td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#DeleteModal" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Name 1</td>
                                        <td>All</td>
                                        <td>Multi Day Event</td>
                                        <td>Section</td>
                                        <td>8</td>
                                        <td>Event Role</td>
                                        <td><button type="button" data-toggle="modal" data-target="#AddChecklistModal" class="btn btn-primary border-radius">Add Checklist</button></td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#DeleteModal" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Name 1</td>
                                        <td>All</td>
                                        <td>Multi Day Event</td>
                                        <td>Section</td>
                                        <td>8</td>
                                        <td>Event Role</td>
                                        <td><button type="button" data-toggle="modal" data-target="#AddChecklistModal" class="btn btn-primary border-radius">Update Checklist</button></td>
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
                <div class="row align-items-center">
                </div>
            </div>
        </div>
    </section>
    <!-- Section -->

    <!-- Add Checklist Modal -->
    <div class="modal fade" id="AddChecklistModal" tabindex="-1" role="dialog" aria-labelledby="AddChecklistModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Checklist Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>PEAPs Item Name</th>
                                            <th>PEAPs Caetegory</th>
                                            <th>Mandatory</th>
                                            <th>Priority</th>
                                            <th>Expected</th>
                                            <th>Submit before (No of Hours)</th>
                                            <th style="width:12%" class="text-right"><a href="javascript:void(0);" class="action additem" title=""><img src="../images/add-item.svg" width="25" /></a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>Name 1</td>
                                            <td>Stock</td>
                                            <td><span class="danger-alert">Mandatory</span></td>
                                            <td><span class="danger-alert">High Priority</span></td>
                                            <td>12</td>
                                            <td>20</td>
                                            <td class="text-right">
                                                <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#DeleteModal" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>Name 1</td>
                                            <td>Stock</td>
                                            <td><span class="success-alert">Optional</span></td>
                                            <td><span class="danger-alert">Low Priority</span></td>
                                            <td>12</td>
                                            <td>20</td>
                                            <td class="text-right">
                                                <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#DeleteModal" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>Name 1</td>
                                            <td>Stock</td>
                                            <td><span class="warning-alert">Optional</span></td>
                                            <td><span class="danger-alert">Low Priority</span></td>
                                            <td>12</td>
                                            <td>20</td>
                                            <td class="text-right">
                                                <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#DeleteModal" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row add-template inner-add-template mt-3">
                        <div class="col">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>PEAPs Item Name <span class="mandatory">*</span></label>
                                        <input type="text" id="datepicker4" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>PEAPs Category <span class="mandatory">*</span></label>
                                        <input type="text"  class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Mandatory <span class="mandatory">*</span></label>
                                        <div class="btn-inline-container row">
                                            <button type="button" class="col btn btn-primary selected">Mandatory</button>
                                            <button type="button" class="col btn btn-primary ml-1">Optional</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Priority <span class="mandatory">*</span></label>
                                        <div class="btn-inline-container row">
                                            <button type="button" class="col btn btn-primary selected">Low</button>
                                            <button type="button" class="col btn btn-primary ml-1">Medium</button>
                                            <button type="button" class="col btn btn-primary ml-1">High</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group m-0 p-0 expected-container">
                                        <label>Expected <span class="mandatory">*</span> 
                                            <div class="expected-options">
                                                <span title="Expected Quality" class="expected-quality-label active">Quantity</span>
                                                <span title="Expected Value" class="expected-value-label">Value</span>
                                            </div>
                                        </label>
                                        <div class="expected-quality-field form-control text-right">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <input type="text" class="form-control expected-value-field">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group m-0">
                                        <label>Submited before (No of Hours) <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6 align-self-end">
                                    <div class="form-group m-0 text-right">
                                        <button type="button" data-dismiss="modal" class="btn btn-secondary cancel-btn">Cancel</button>
                                        <button type="button" data-dismiss="modal" class="btn btn-primary ml-3 save-btn">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Peaps Template Modal -->
    <div class="modal fade" id="AddPeapsTemplateModal" tabindex="-1" role="dialog" aria-labelledby="AddPeapsTemplateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AddPeapsTemplateModalLabel">Add PEAP's Template</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row add-template">
                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Template Name <span class="mandatory">*</span></label>
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
                                        <label>Event Category <span class="mandatory">*</span></label>
                                        <select class="form-control">
                                            <option>Select</option>
                                            <option>Northern Eastern</option>
                                            <option>Middle East</option>
                                            <option>South East</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Priority <span class="mandatory">*</span></label>
                                        <div class="row">
                                            <div class="col chekbox-bg align-self-center">
                                                <label class="checkbox-container checked">Single Day
                                                    <input type="checkbox" checked>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col chekbox-bg align-self-center">
                                                <label class="checkbox-container">Multi Day
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col chekbox-bg align-self-center">
                                                <label class="checkbox-container">Group Event
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Application For <span class="mandatory">*</span></label>
                                        <div class="btn-inline-container row">
                                            <button type="button" class="col btn btn-primary selected">Section</button>
                                            <button type="button" class="col btn btn-primary ml-1">Floor</button>
                                            <button type="button" class="col btn btn-primary ml-1">Zone</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Submit before (No of Hours) <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>To be Filled By <span class="mandatory">*</span></label>
                                        <select class="form-control">
                                            <option>Select</option>
                                            <option>Northern Eastern</option>
                                            <option>Middle East</option>
                                            <option>South East</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 align-self-center">
                                    <div class="form-group m-0 text-right">
                                        <button type="button" data-dismiss="modal" class="btn btn-secondary cancel-btn">Cancel</button>
                                        <button type="button" data-dismiss="modal" class="btn btn-primary ml-3 save-btn">Save</button>
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