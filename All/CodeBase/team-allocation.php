<!doctype html>
<html lang="en">

<?php include 'head-files.php';?>

<body>

    <?php include 'header.php';?>

    <!-- Wrapper -->
    <section class="slide-out">
        <!-- Body Content -->
        <div class="container-fluid">
            <h2 class="title">Team Allocation</h2>
            <div class="main-container">

                <?php include 'toaster.php';?>

                <div class="row">
                    <div class="col">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="planning-tab-allocation-tab" data-toggle="tab" href="#planning-tab-allocation" role="tab" aria-controls="planning-tab-allocation" aria-selected="true">Planning Team Allocation</a>
                                <a class="nav-item nav-link" id="event-day-team-allocation-tab" data-toggle="tab" href="#event-day-team-allocation" role="tab" aria-controls="event-day-team-allocation" aria-selected="false">Event Day Team Allocation</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="planning-tab-allocation" role="tabpanel" aria-labelledby="planning-tab-allocation-tab">
                                <div class="row">
                                    <div class="col">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" style="width:2%;">#</th>
                                                        <th style="width:15%;">Team Name</th>
                                                        <th style="width:15%;">Allocated Department</th>
                                                        <th style="width:10%;">Incharge 1</th>
                                                        <th style="width:10%;">Incharge 2</th>
                                                        <th style="width:20%;">Members</th>
                                                        <th style="width:12%;" class="text-center"><a href="javascript:void(0);" class="action" data-toggle="modal" data-target="#AddPlanningTeam" title="Add"><img src="images/add-item.svg" width="25" /></a></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td>Planning Team 1</td>
                                                        <td>Department 1</td>
                                                        <td>Incahrge 1</td>
                                                        <td>Incahrge 2</td>
                                                        <td>Members</td>
                                                        <td class="text-right">
                                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="images/edit.svg" width="25"></a>
                                                            <a href="javascript:void(0);" class="action-icon" title="Delete" data-toggle="modal" data-target="#DeleteModal" title="Delete"><img src="images/delete.svg" width="25"></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td>Planning Team 1</td>
                                                        <td>Department 1</td>
                                                        <td>Incahrge 1</td>
                                                        <td>Incahrge 2</td>
                                                        <td>Members</td>
                                                        <td class="text-right">
                                                            <a href="javascript:void(0);" class="action-icon" title="Save"><img src="images/save.svg" width="25"></a>
                                                            <a href="javascript:void(0);" class="action-icon" title="Cancel" ><img src="images/cancel.svg" width="25"></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="event-day-team-allocation" role="tabpanel" aria-labelledby="event-day-team-allocation-tab">
                                <div class="row">
                                    <div class="col">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" style="width:2%;">#</th>
                                                        <th style="width:10%;">Team Name</th>
                                                        <th style="width:14%;">Allocated Department</th>
                                                        <th style="width:10%;">Members</th>
                                                        <th style="width:10%;">Category</th>
                                                        <th style="width:10%;">Event Position</th>
                                                        <th style="width:10%;">Call Sign</th>
                                                        <th style="width:14%;">Communication Channel</th>
                                                        <th style="width:10%;">Number</th>
                                                        <th style="width:10%;" class="text-center"><a href="javascript:void(0);" class="action" data-toggle="modal" data-target="#EventDayTeam" title="Add"><img src="images/add-item.svg" width="25" /></a></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td>Team 1</td>
                                                        <td>Department 1</td>
                                                        <td>Member 1</td>
                                                        <td>Category 1</td>
                                                        <td>Position 1</td>
                                                        <td>ABC</td>
                                                        <td>Tele</td>
                                                        <td>986559668</td>
                                                        <td class="text-right">
                                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="images/edit.svg" width="25"></a>
                                                            <a href="javascript:void(0);" class="action-icon" title="Delete" data-toggle="modal" data-target="#DeleteModal" title="Delete"><img src="images/delete.svg" width="25"></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td>Team 1</td>
                                                        <td>Department 1</td>
                                                        <td>Member 1</td>
                                                        <td>Category 1</td>
                                                        <td>Position 1</td>
                                                        <td>ABC</td>
                                                        <td>Tele</td>
                                                        <td>986559668</td>
                                                        <td class="text-right">
                                                            <a href="javascript:void(0);" class="action-icon" title="Save"><img src="images/save.svg" width="25"></a>
                                                            <a href="javascript:void(0);" class="action-icon" title="Cancel"><img src="images/cancel.svg" width="25"></a>
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
                <div class="row mt-3">
                    <div class="col action-buttons">
                        <div class="form-group">
                            <div class="btn-group">
                                    <a class="btn btn-secondary updatenext" href="event-checklist.php">Cancel</a>
                            </div>
                            <div class="btn-group ml-3">
                                <button type="button" class="btn btn-primary updatebtn">Update</button>
                            </div>
                            <div class="btn-group ml-3">
                                <a class="btn btn-primary updatenext" href="zone-allocation.php">Update & Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'events-menu.php';?>
        
    </section>
    
    <!-- Choose Members Modal -->
    <div class="modal fade" id="ChooseMembers" tabindex="-1" role="dialog" aria-labelledby="ChooseMembersTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <select name="from[]" id="multiselect" class="form-control" size="8" multiple="multiple">
                                <option value="1">Item 1</option>
                                <option value="2">Item 5</option>
                                <option value="2">Item 2</option>
                                <option value="2">Item 4</option>
                                <option value="3">Item 3</option>
                            </select>
                        </div>
                        
                        <div class="col-md-2 align-self-center text-center">
                            <div class="row">
                                <div class="col">
                                    <!-- <div id="multiselect_rightAll" class="btn btn-block"><i class="glyphicon glyphicon-forward"></i></div> -->
                                    <div id="multiselect_rightSelected" class="multiselect-icon active"><i class="material-icons">chevron_right</i></div>
                                    <div id="multiselect_leftSelected" class="multiselect-icon"><i class="material-icons">chevron_left</i></div>
                                    <!-- <div id="multiselect_leftAll" class="btn btn-block"><i class="glyphicon glyphicon-backward"></i></div> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-5">
                            <select name="to[]" id="multiselect_to" class="form-control" size="8" multiple="multiple"></select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Planning Team Modal -->
    <div class="modal fade" id="AddPlanningTeam" tabindex="-1" role="dialog" aria-labelledby="AddPlanningTeamLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AddPlanningTeamLabel">Add Planning Team Allocation</h5>
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
                                        <label>Team Name <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Allocated Department <span class="mandatory">*</span></label>
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
                                        <label>Incahrge 1 <span class="mandatory">*</span></label>
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
                                        <label>Incahrge 2 <span class="mandatory">*</span></label>
                                        <select class="form-control">
                                            <option>Select</option>
                                            <option>Northern Eastern</option>
                                            <option>Middle East</option>
                                            <option>South East</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Members <span class="mandatory">*</span></label>
                                        <div class="col-md-12"><a href="javascript:void(0);"  data-toggle="modal" data-target="#ChooseMembers">Choose Members</a></div>
                                    </div>
                                </div>
                                <div class="col-md-9 align-self-end">
                                    <div class="form-group m-0 text-right">
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

    <!-- Add Event Day Modal -->
    <div class="modal fade" id="EventDayTeam" tabindex="-1" role="dialog" aria-labelledby="EventDayTeamLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EventDayTeamLabel">Add Event Day Team Allocation</h5>
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
                                        <label>Team Name <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Allocated Department <span class="mandatory">*</span></label>
                                        <select class="form-control" disabled>
                                            <option>Select</option>
                                            <option>Northern Eastern</option>
                                            <option>Middle East</option>
                                            <option>South East</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Member <span class="mandatory">*</span></label>
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
                                        <label>Event Role <span class="mandatory">*</span></label>
                                        <select class="form-control">
                                            <option>Select</option>
                                            <option>Northern Eastern</option>
                                            <option>Middle East</option>
                                            <option>South East</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Event Position <span class="mandatory">*</span></label>
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
                                        <label>Call Sign <span class="mandatory">*</span></label>
                                        <select class="form-control" disabled>
                                            <option>Select</option>
                                            <option>Northern Eastern</option>
                                            <option>Middle East</option>
                                            <option>South East</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Communication Channel</label>
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
                                        <label>Channel Number <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col align-self-end">
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

    <script>
    $('#multiselect_to').selectize({
            plugins: ['remove_button'],
            delimiter: ',',
            persist: false,
            create: function(input) {
                return {
                    value: input,
                    text: input
                }
            }
        });
    </script>

</body>
</html>