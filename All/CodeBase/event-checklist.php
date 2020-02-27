<!doctype html>
<html lang="en">

<?php include 'head-files.php';?>

<body>

    <?php include 'header.php';?>

    <!-- Wrapper -->
    <section class="slide-out">
        <!-- Main Container -->
        <div class="container-fluid">
            <h2 class="title">Event Check List</h2>
            <div class="main-container">

                <?php include 'toaster.php';?>

                <div class="row">
                    <div class="col align-self-center text-right">
                        <p>Template1 <a href="#" data-toggle="modal" class="link-underline" data-target="#ChangeTemplate">Change</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="accordion" id="EventChecklistAccordion">
                            <div class="card">
                                <div class="card-header active" id="headingOne">
                                    <h5 data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Stock <i class="material-icons">arrow_drop_down</i></h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#EventChecklistAccordion">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="width:5%;">#</th>
                                                    <th style="width:10%;">Requirement</th>
                                                    <th style="width:7%;">Require Date</th>
                                                    <th style="width:10%;">Mandatory</th>
                                                    <th style="width:10%;">Priority</th>
                                                    <th style="width:10%;">Expected</th>
                                                    <th style="width:15%;">Actual</th>
                                                    <th class="text-center" style="width:10%;">Split</th>
                                                    <th class="text-center" style="width:10%;">Applicable</th>
                                                    <th style="width:5%;"><a href="javascript:void(0);" class="action" title="Action" data-toggle="modal" data-target="#AddNewChecklist"><img src="images/add-item.svg" width="25" /></a></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>PDAs</td>
                                                    <td>08/01/2019</td>
                                                    <td><span class="danger-alert">Mandatory</span></td>
                                                    <td><span class="danger-alert">High Priority</span></td>
                                                    <td><input type="text" value="15" class="form-control" /></td>
                                                    <td><input type="text" value="10" disabled class="form-control" /></td>
                                                    <td class="text-center"><a class="add-split" title="Split" href="javascript:void(0);"><img src="images/split.svg" width="25" /></a></td>
                                                    <td class="text-center">
                                                        <label class="switch">
                                                            <input type="checkbox" checked>
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Team 1</td>
                                                    <td>08/01/2019</td>
                                                    <td><span class="warning-alert">Optional</span></td>
                                                    <td><span class="success-alert">Low Priority</span></td>
                                                    <td><input type="text" value="15" class="form-control" /></td>
                                                    <td><input type="text" value="10" disabled class="form-control" /></td>
                                                    <td class="text-center"><a class="add-split" title="Split" href="javascript:void(0);"><img src="images/split.svg" width="25" /></a></td>
                                                    <td class="text-center">
                                                        <label class="switch">
                                                            <input type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>PDAs</td>
                                                    <td>08/01/2019</td>
                                                    <td><span class="danger-alert">Mandatory</span></td>
                                                    <td><span class="success-alert">Low Priority</span></td>
                                                    <td class="text-center">
                                                        <label class="switch">
                                                            <input type="checkbox" checked>
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </td>
                                                    <td><input type="text" value="10" disabled class="form-control" /></td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">
                                                        <label class="switch">
                                                            <input type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Team 1</td>
                                                    <td>08/01/2019</td>
                                                    <td><span class="warning-alert">Optional</span></td>
                                                    <td><span class="danger-alert">High Priority</span></td>
                                                    <td><input type="text" value="15" class="form-control" />00</td>
                                                    <td><input type="text" value="10" disabled class="form-control" /></td>
                                                    <td class="text-center"><a class="add-split" title="Split" href="javascript:void(0);"><img src="images/split.svg" width="25" /></a></td>
                                                    <td class="text-center">
                                                        <label class="switch">
                                                            <input type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="edit-split-column" colspan="10">
                                                        <div class="edit-split-container">
                                                            <div class="edit-split-value-container">
                                                                <span class="split-icon"><img src="images/edit.svg" width="25"></span>
                                                                <span class="split-value">Men : 900</span>
                                                            </div>
                                                            <div class="edit-split-input-container">
                                                                <span class="edit-split-value"><input type="text" value="Men" /></span>
                                                                <span class="edit-split-value pl-0"><input type="text" value="Women" /></span>
                                                                <span class="split-icon save-split-icon" title="Save"><img src="images/tick.svg" width="18" /></span>
                                                                <span class="split-icon cancel-split-icon" title="Cancel"><img src="images/cross.svg" width="18" /></span>
                                                            </div>
                                                            <span class="split-icon border-right-0 add-split-icon" title="Add"><img src="images/add-inline.svg" width="25" /></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Equipments <i class="material-icons">arrow_drop_down</i></h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#EventChecklistAccordion">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="width:5%;">#</th>
                                                    <th style="width:15%;">Requirement</th>
                                                    <th style="width:7%;">Require Date</th>
                                                    <th style="width:10%;">Mandatory</th>
                                                    <th style="width:10%;">Priority</th>
                                                    <th style="width:10%;">Expected</th>
                                                    <th style="width:15%;">Actual</th>
                                                    <th style="width:10%;">Split</th>
                                                    <th class="text-center" style="width:13%;">Applicable</th>
                                                    <th style="width:10%;"><a href="javascript:void(0);" class="action" title="Action" data-toggle="modal" data-target="#AddNewChecklist"><img src="images/add-item.svg" width="25" /></a></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>PDAs</td>
                                                    <td>08/01/2019</td>
                                                    <td><span class="danger-alert">Mandatory</span></td>
                                                    <td><span class="danger-alert">High Priority</span></td>
                                                    <td>10</td>
                                                    <td><input type="tel" class="form-control" /></td>
                                                    <td class="text-center"><a class="add-split" title="Split" href="javascript:void(0);"><img src="images/split.svg" width="25" /></a></td>
                                                    <td class="text-center">
                                                        <label class="switch">
                                                            <input type="checkbox" checked>
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Team 1</td>
                                                    <td>08/01/2019</td>
                                                    <td><span class="warning-alert">Optional</span></td>
                                                    <td><span class="success-alert">Low Priority</span></td>
                                                    <td>10</td>
                                                    <td><input type="tel" class="form-control" /></td>
                                                    <td class="text-center"><a class="add-split" title="Split" href="javascript:void(0);"><img src="images/split.svg" width="25" /></a></td>
                                                    <td class="text-center">
                                                        <label class="switch">
                                                            <input type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>PDAs</td>
                                                    <td>08/01/2019</td>
                                                    <td><span class="danger-alert">Mandatory</span></td>
                                                    <td><span class="success-alert">Low Priority</span></td>
                                                    <td>YES</td>
                                                    <td class="text-center">
                                                        <label class="switch">
                                                            <input type="checkbox" checked>
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">
                                                        <label class="switch">
                                                            <input type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Team 1</td>
                                                    <td>08/01/2019</td>
                                                    <td><span class="warning-alert">Optional</span></td>
                                                    <td><span class="danger-alert">High Priority</span></td>
                                                    <td>1200</td>
                                                    <td><input type="tel" class="form-control" /></td>
                                                    <td class="text-center"><a class="add-split" title="Split" href="javascript:void(0);"><img src="images/split.svg" width="25" /></a></td>
                                                    <td class="text-center">
                                                        <label class="switch">
                                                            <input type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="edit-split-column" colspan="10">
                                                        <div class="edit-split-container">
                                                            <div class="edit-split-value-container">
                                                                <span class="split-icon"><img src="images/edit.svg" width="25"></span>
                                                                <span class="split-value">Men : 900</span>
                                                            </div>
                                                            <div class="edit-split-input-container">
                                                                <span class="edit-split-value"><input type="text" value="Women" /></span>
                                                                <span class="edit-split-value pl-0"><input type="text" value="Women" /></span>
                                                                <span class="split-icon save-split-icon" title="Save"><img src="images/tick.svg" width="18" /></span>
                                                                <span class="split-icon cancel-split-icon" title="Cancel"><img src="images/cross.svg" width="18" /></span>
                                                            </div>
                                                            <span class="split-icon border-right-0 add-split-icon" title="Add"><img src="images/add-inline.svg" width="25" /></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Medical <i class="material-icons">arrow_drop_down</i></h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#EventChecklistAccordion">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="width:5%;">#</th>
                                                    <th style="width:15%;">Requirement</th>
                                                    <th style="width:7%;">Require Date</th>
                                                    <th style="width:10%;">Mandatory</th>
                                                    <th style="width:10%;">Priority</th>
                                                    <th style="width:10%;">Expected</th>
                                                    <th style="width:15%;">Actual</th>
                                                    <th style="width:10%;">Split</th>
                                                    <th class="text-center" style="width:13%;">Applicable</th>
                                                    <th style="width:10%;"><a href="javascript:void(0);" class="action" title="Action" data-toggle="modal" data-target="#AddNewChecklist"><img src="images/add-item.svg" width="25" /></a></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>PDAs</td>
                                                    <td>08/01/2019</td>
                                                    <td><span class="danger-alert">Mandatory</span></td>
                                                    <td><span class="danger-alert">High Priority</span></td>
                                                    <td>10</td>
                                                    <td><input type="tel" class="form-control" /></td>
                                                    <td class="text-center"><a class="add-split" title="Split" href="javascript:void(0);"><img src="images/split.svg" width="25" /></a></td>
                                                    <td class="text-center">
                                                        <label class="switch">
                                                            <input type="checkbox" checked>
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Team 1</td>
                                                    <td>08/01/2019</td>
                                                    <td><span class="warning-alert">Optional</span></td>
                                                    <td><span class="success-alert">Low Priority</span></td>
                                                    <td>10</td>
                                                    <td><input type="tel" class="form-control" /></td>
                                                    <td class="text-center"><a class="add-split" title="Split" href="javascript:void(0);"><img src="images/split.svg" width="25" /></a></td>
                                                    <td class="text-center">
                                                        <label class="switch">
                                                            <input type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>PDAs</td>
                                                    <td>08/01/2019</td>
                                                    <td><span class="danger-alert">Mandatory</span></td>
                                                    <td><span class="success-alert">Low Priority</span></td>
                                                    <td>YES</td>
                                                    <td class="text-center">
                                                        <label class="switch">
                                                            <input type="checkbox" checked>
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">
                                                        <label class="switch">
                                                            <input type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Team 1</td>
                                                    <td>08/01/2019</td>
                                                    <td><span class="warning-alert">Optional</span></td>
                                                    <td><span class="danger-alert">High Priority</span></td>
                                                    <td>1200</td>
                                                    <td><input type="tel" class="form-control" /></td>
                                                    <td class="text-center"><a class="add-split" title="Split" href="javascript:void(0);"><img src="images/split.svg" width="25" /></a></td>
                                                    <td class="text-center">
                                                        <label class="switch">
                                                            <input type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="edit-split-column" colspan="10">
                                                        <div class="edit-split-container">
                                                            <div class="edit-split-value-container">
                                                                <span class="split-icon" title="Edit"><img src="images/edit.svg" width="23"></span>
                                                                <span class="split-value">Men : 900</span>
                                                            </div>
                                                            <div class="edit-split-input-container">
                                                                <span class="edit-split-value"><input type="text" value="Women" /></span>
                                                                <span class="edit-split-value pl-0"><input type="text" value="Women" /></span>
                                                                <span class="split-icon save-split-icon" title="Save"><img src="images/tick.svg" width="18" /></span>
                                                                <span class="split-icon cancel-split-icon" title="Cancel"><img src="images/cross.svg" width="18" /></span>
                                                            </div>
                                                            <span class="split-icon border-right-0 add-split-icon" title="Add"><img src="images/add-inline.svg" width="25" /></span>
                                                        </div>
                                                    </td>
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
                <div class="row mt-4">
                    <div class="col action-buttons">
                        <div class="form-group">
                            <div class="btn-group">
                                    <a class="btn btn-secondary updatenext" href="participating-teams.php">Cancel</a>
                            </div>
                            <div class="btn-group ml-3">
                                <button type="button" class="btn btn-primary updatebtn">Update</button>
                            </div>
                            <div class="btn-group ml-3">
                                <a class="btn btn-primary updatenext" href="team-allocation.php">Update & Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'events-menu.php';?>

    </section>

    <!-- Change Template Modal -->
    <div class="modal fade" id="ChangeTemplate" tabindex="-1" role="dialog" aria-labelledby="ChangeTemplateLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ChangeTemplateLabel">Are you sure?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Would you like to change this template? If 'YES', the existing list will be cleared.
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                    <button type="button" class="btn btn-primary dangerbtn" data-dismiss="modal">YES</button>
                </div>
            </div>
        </div>
      </div>
    </div>

    <!-- Add New Checklist -->
    <div class="modal fade" id="AddNewChecklist" tabindex="-1" role="dialog" aria-labelledby="AddNewChecklistTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Checklist Item - Stocks</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Requirement <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" />
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
                        <div class="col-md-3">
                            <div class="form-group p-0 expected-container">
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
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-control col-md-10">Split Required?
                                    <label class="switch float-right">
                                        <input type="checkbox" checked="">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 text-right">
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
    
    <?php include 'scripts.php';?>

</body>
</html>