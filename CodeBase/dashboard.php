<!doctype html>
<html lang="en">
    
<?php include 'head-files.php';?>

<body>

    <?php include 'dashboard-header.php' ?>

    <!-- Wrapper -->
    <section>
        <div class="container-fluid">
            <!-- Body Content -->
            <h2 class="title">DASHBOARD</h2>
            <div class="main-container dashboard-main-container">
                <!-- <div class="row mb-3">
                    <div class="col-md-2 pl-0">
                        <div class="row dashboard-container">
                            <div class="col-md-7 inc-label">MEDICS</div>
                            <div class="col-md-5 inc-count color-blue">20</div>
                        </div>
                    </div>
                    <div class="col-md-2 pl-0">
                        <div class="row dashboard-container">
                            <div class="col-md-7 inc-label">PARAMEDICS</div>
                            <div class="col-md-5 inc-count color-blue">34</div>
                        </div>
                    </div>
                    <div class="col-md-2 pl-0">
                        <div class="row dashboard-container">
                            <div class="col-md-7 inc-label">FIRSTAIDERS</div>
                            <div class="col-md-5 inc-count color-purple">45</div>
                        </div>
                    </div>
                    <div class="col-md-2 pl-0">
                        <div class="row dashboard-container">
                            <div class="col-md-7 inc-label">EQUIPMENTS</div>
                            <div class="col-md-5 inc-count color-green-l">60</div>
                        </div>
                    </div>
                    <div class="col-md-2 pl-0">
                        <div class="row dashboard-container">
                            <div class="col-md-7 inc-label">FIRSTAID & KITS</div>
                            <div class="col-md-5 inc-count color-cyan">80</div>
                        </div>
                    </div>
                    <div class="col-md-2 pl-0">
                        <div class="row dashboard-container">
                            <div class="col-md-7 inc-label">FIRE & SAFETY</div>
                            <div class="col-md-5 inc-count color-red">95</div>
                        </div>
                    </div>
                </div> -->
                <div class="row mr-0">
                    <div class="col-md-9 dashboard-table-container">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="6" class="text-right">
                                            <div class="legend-block-container">
                                                <a href="javascript:void(0);" class="legend-block mr-3"><span class="legend-high"></span>High</a>
                                                <a href="javascript:void(0);" class="legend-block mr-3"><span class="legend-medium"></span>Medium</a>
                                                <a href="javascript:void(0);" class="legend-block mr-3"><span class="legend-low"></span>Low</a>
                                                <a href="javascript:void(0);" class="ml-2" title="refresh"><img src="images/refresh.svg" width="25" /></a>
                                                <a href="javascript:void(0);" class="ml-2" data-toggle="modal" data-target="#CreateIncident" title=""><img src="images/add-item.svg" width="25" /></a>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="active">
                                        <td style="width:10%;" class="table-right-border text-indent"><span class="priority high-priority nowraptext"></span>11:30 AM</td>
                                        <td style="width:10%;" class="table-right-border">
                                            <table class="inner-table">
                                                <tr>
                                                    <td><img src="images/male-placeholder.svg" width="25" /></td>
                                                    <td class="pl-2">30 yrs</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="width:5%;" class="table-right-border">Cardiac</td>
                                        <td style="width:30%;">
                                            <table class="inner-table inc-pad">
                                                <tr>
                                                    <td>
                                                        <span class="incident-symptoms selected">
                                                            <img src="images/incident-icons/mobile-grey.svg" class="normal-incident" height="35" />
                                                            <img src="images/incident-icons/mobile-active.svg" class="active-incident" height="35" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="incident-symptoms selected">
                                                            <img src="images/incident-icons/speaking-grey.svg" class="normal-incident" height="35" />
                                                            <img src="images/incident-icons/speaking-active.svg" class="active-incident" height="35" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="incident-symptoms selected">
                                                            <img src="images/incident-icons/breathing-grey.svg" class="normal-incident" height="35" />
                                                            <img src="images/incident-icons/breathing-active.svg" class="active-incident" height="35" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="incident-symptoms">
                                                            <img src="images/incident-icons/injury-grey.svg" class="normal-incident" height="35" />
                                                            <img src="images/incident-icons/injury-active.svg" class="active-incident" height="35" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="incident-symptoms">
                                                            <img src="images/incident-icons/bleeding-grey.svg" class="normal-incident" height="35" />
                                                            <img src="images/incident-icons/bleeding-active.svg" class="active-incident" height="35" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="incident-symptoms selected">
                                                            <img src="images/incident-icons/criminal-grey.svg" class="normal-incident" height="35" />
                                                            <img src="images/incident-icons/criminal-active.svg" class="active-incident" height="35" />
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" class="table-right-border">ZONE 4</td>
                                                    <td colspan="2" class="table-right-border">LEVEL 2</td>
                                                    <td colspan="2">SEAT NO 123</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td class="text-center" style="width:10%;"><span class="incident-progress">In Progress</span></td>
                                        <td class="inc-table-description" style="width:35%;">
                                            <span title="Edit" class="inc-table-edit"><img src="images/edit-dashboard.svg" width="20" /></span>
                                            <p>Stewards Comments</p>
                                            <p>Parturient vestibulum ullamcorper magnis leo a consectetur sodales porta ac at mi interdum sed id fusce a vulputat...</p>
                                            <p><span class="incident-date-info">15/06/2019 Member 1</span></p>
                                        </td>
                                    </tr>
                                    <tr class="edit-mode">
                                        <td style="width:10%;" class="table-right-border text-indent"><span class="priority low-priority nowraptext"></span>11:30 AM</td>
                                        <td style="width:10%;" class="table-right-border">
                                            <table class="inner-table">
                                                <tr>
                                                    <td><img src="images/female-placeholder.svg" width="25" /></td>
                                                    <td class="pl-2">30 yrs</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="width:10%;" class="table-right-border">Cardiac</td>
                                        <td style="width:30%;">
                                            <table class="inner-table inc-pad">
                                                <tr>
                                                    <td>
                                                        <span class="incident-symptoms selected">
                                                            <img src="images/incident-icons/mobile-grey.svg" class="normal-incident" height="35" />
                                                            <img src="images/incident-icons/mobile-active.svg" class="active-incident" height="35" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="incident-symptoms">
                                                            <img src="images/incident-icons/speaking-grey.svg" class="normal-incident" height="35" />
                                                            <img src="images/incident-icons/speaking-active.svg" class="active-incident" height="35" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="incident-symptoms selected">
                                                            <img src="images/incident-icons/breathing-grey.svg" class="normal-incident" height="35" />
                                                            <img src="images/incident-icons/breathing-active.svg" class="active-incident" height="35" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="incident-symptoms selected">
                                                            <img src="images/incident-icons/injury-grey.svg" class="normal-incident" height="35" />
                                                            <img src="images/incident-icons/injury-active.svg" class="active-incident" height="35" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="incident-symptoms">
                                                            <img src="images/incident-icons/bleeding-grey.svg" class="normal-incident" height="35" />
                                                            <img src="images/incident-icons/bleeding-active.svg" class="active-incident" height="35" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="incident-symptoms">
                                                            <img src="images/incident-icons/criminal-grey.svg" class="normal-incident" height="35" />
                                                            <img src="images/incident-icons/criminal-active.svg" class="active-incident" height="35" />
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" class="table-right-border">ZONE 4</td>
                                                    <td colspan="2" class="table-right-border">LEVEL 2</td>
                                                    <td colspan="2">SEAT NO 123</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td class="text-center" style="width:10%;"> 
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>In Progress</option>
                                                <option>Open</option>
                                            </select>
                                        </td>
                                        <td class="inc-table-description" style="width:35%;">
                                            <span title="Save" class="inc-table-save"><img src="images/save-dashboard.svg" width="20" /></span>
                                            <span title="Cancel" class="inc-table-cancel"><img src="images/cancel-dashboard.svg" width="20" /></span>
                                            <p>Stewards Comments</p>
                                            <textarea rows="2" class="form-control col-md-10">Parturient vestibulum ullamcorper magnis leo a consectetur</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:12%;" class="table-right-border text-indent"><span class="priority medium-priority"></span>11:30 AM</td>
                                        <td style="width:10%;" class="table-right-border">
                                            <table class="inner-table">
                                                <tr>
                                                    <td><img src="images/male-placeholder.svg" width="25" /></td>
                                                    <td class="pl-2">30 yrs</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td style="width:10%;" class="table-right-border">Cardiac</td>
                                        <td style="width:30%;">
                                            <table class="inner-table inc-pad">
                                                <tr>
                                                    <td>
                                                        <span class="incident-symptoms">
                                                            <img src="images/incident-icons/mobile-grey.svg" class="normal-incident" height="35" />
                                                            <img src="images/incident-icons/mobile-active.svg" class="active-incident" height="35" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="incident-symptoms selected">
                                                            <img src="images/incident-icons/speaking-grey.svg" class="normal-incident" height="35" />
                                                            <img src="images/incident-icons/speaking-active.svg" class="active-incident" height="35" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="incident-symptoms selected">
                                                            <img src="images/incident-icons/breathing-grey.svg" class="normal-incident" height="35" />
                                                            <img src="images/incident-icons/breathing-active.svg" class="active-incident" height="35" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="incident-symptoms selected">
                                                            <img src="images/incident-icons/injury-grey.svg" class="normal-incident" height="35" />
                                                            <img src="images/incident-icons/injury-active.svg" class="active-incident" height="35" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="incident-symptoms">
                                                            <img src="images/incident-icons/bleeding-grey.svg" class="normal-incident" height="35" />
                                                            <img src="images/incident-icons/bleeding-active.svg" class="active-incident" height="35" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="incident-symptoms selected">
                                                            <img src="images/incident-icons/criminal-grey.svg" class="normal-incident" height="35" />
                                                            <img src="images/incident-icons/criminal-active.svg" class="active-incident" height="35" />
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" class="table-right-border">ZONE 4</td>
                                                    <td colspan="2" class="table-right-border">LEVEL 2</td>
                                                    <td colspan="2">SEAT NO 123</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td class="text-center" style="width:10%;"><span class="incident-progress">Open</span></td>
                                        <td class="inc-table-description" style="width:35%;">
                                            <span title="Edit" class="inc-table-edit"><img src="images/edit-dashboard.svg" width="20" /></span>
                                            <p>Stewards Comments</p>
                                            <p>Parturient vestibulum ullamcorper magnis leo a consectetur sodales porta ac at mi interdum sed id fusce a vulputat...</p>
                                            <p><span class="incident-date-info">15/06/2019 Member 1</span></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>    
                    </div>
                    <div class="col-md-3 pr-0">
                        <div class="incident-history">
                            <h5>History</h5>
                            <div class="history-block">
                                <p><span class="history-progress">In Progress</span> <span class="history-time">12:00 AM</span> <span class="dispatch-status">Dispatch</span></p>
                                <p><span class="team-name">Team Name 1</span> <span class="team-description">Ac sociosqu hendrerit mii...</span></p>
                            </div>
                            <div class="history-block">
                                <p><span class="history-progress">In Progress</span> <span class="history-time">12:00 AM</span> <span class="dispatch-status">Dispatch</span></p>
                                <p><span class="team-name">Team Name 1</span> <span class="team-description">Ac sociosqu hendrerit mii...</span></p>
                            </div>
                            <div class="history-block">
                                <p><span class="history-progress">In Progress</span> <span class="history-time">12:00 AM</span> <span class="dispatch-status">Dispatch</span></p>
                                <p><span class="team-name">Team Name 1</span> <span class="team-description">Ac sociosqu hendrerit mii...</span></p>
                            </div>
                            <div class="history-block">
                                <p><span class="history-progress">In Progress</span> <span class="history-time">12:00 AM</span> <span class="dispatch-status">Dispatch</span></p>
                                <p><span class="team-name">Team Name 1</span> <span class="team-description">Ac sociosqu hendrerit mii...</span></p>
                            </div>
                            <div class="history-block">
                                <p><span class="history-progress">In Progress</span> <span class="history-time">12:00 AM</span> <span class="dispatch-status">Dispatch</span></p>
                                <p><span class="team-name">Team Name 1</span> <span class="team-description">Ac sociosqu hendrerit mii...</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Create Incident Modal -->
    <div class="modal fade" id="CreateIncident" tabindex="-1" role="dialog" aria-labelledby="CreateIncidentLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeleteModalLabel">Create Incident</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Incident Type <span class="mandatory">*</span></label>
                                <div class="btn-inline-container row">
                                    <button type="button" class="col btn btn-primary selected">Medical</button>
                                    <button type="button" class="col btn btn-primary ml-1">Non Medical</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Select Department <span class="mandatory">*</span></label>
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
                                <label>Gender <span class="mandatory">*</span></label>
                                <div class="btn-inline-container row">
                                    <button type="button" class="col btn btn-primary selected">Medical</button>
                                    <button type="button" class="col btn btn-primary ml-1">Non Medical</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 align-self-end">
                            <div class="form-group">
                                <div class="btn-inline-container row">
                                    <button type="button" class="col btn btn-primary selected">Infant</button>
                                    <button type="button" class="col btn btn-primary ml-1">Child</button>
                                    <button type="button" class="col btn btn-primary ml-1">Adult</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Age </label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <div class="row incident-checkbox-container">
                                <div class="col chekbox-bg align-self-center">
                                    <label class="checkbox-container">Mobile
                                        <input type="checkbox">
                                        <span class="checkmark">
                                            <img src="images/incident-icons/icon-mobile-white.svg" class="normal-incident" height="15" />
                                            <img src="images/incident-icons/icon-mobile-grey.svg" class="active-incident" height="15" />
                                        </span>
                                    </label>
                                </div>
                                <div class="col chekbox-bg align-self-center">
                                    <label class="checkbox-container">Talking
                                        <input type="checkbox">
                                        <span class="checkmark">
                                            <img src="images/incident-icons/icon-speaking-white.svg" class="normal-incident" height="15" />
                                            <img src="images/incident-icons/icon-speaking-grey.svg" class="active-incident" height="15" />
                                        </span>
                                    </label>
                                </div>
                                <div class="col chekbox-bg align-self-center">
                                    <label class="checkbox-container">Breathing
                                        <input type="checkbox">
                                        <span class="checkmark">
                                            <img src="images/incident-icons/icon-breathing-white.svg" class="normal-incident" height="15" />
                                            <img src="images/incident-icons/icon-breathing-grey.svg" class="active-incident" height="15" />
                                        </span>
                                    </label>
                                </div>
                                <div class="col chekbox-bg align-self-center">
                                    <label class="checkbox-container">Injury
                                        <input type="checkbox">
                                        <span class="checkmark">
                                            <img src="images/incident-icons/icon-injury-white.svg" class="normal-incident" height="15" />
                                            <img src="images/incident-icons/icon-injury-grey.svg" class="active-incident" height="15" />
                                        </span>
                                    </label>
                                </div>
                                <div class="col chekbox-bg align-self-center">
                                    <label class="checkbox-container">Bleeding
                                        <input type="checkbox">
                                        <span class="checkmark">
                                            <img src="images/incident-icons/icon-blood-white.svg" class="normal-incident" height="15" />
                                            <img src="images/incident-icons/icon-blood-grey.svg" class="active-incident" height="15" />
                                        </span>
                                    </label>
                                </div>
                                <div class="col chekbox-bg align-self-center">
                                    <label class="checkbox-container">Criminal
                                        <input type="checkbox">
                                        <span class="checkmark">
                                            <img src="images/incident-icons/icon-criminal-white.svg" class="normal-incident" height="15" />
                                            <img src="images/incident-icons/icon-criminal-grey.svg" class="active-incident" height="15" />
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 align-self-center">
                            <div class="form-group">
                                <label>Incident </label>
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
                                <label>Incident Level</label>
                                <div class="col nobackground-hideselection pl-0">
                                    <input type="text" name="exp-expressive" data-provide="slider" data-slider-ticks="[1, 2, 3, 4, 5, 6, 7, 8, 9, 10]" data-slider-min="1" data-slider-max="10" data-slider-step="1" data-slider-value="4" data-slider-tooltip="hide" data-slider-ticks-labels='["Low", "High"]'>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Select Zone <span class="mandatory">*</span></label>
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
                                <label>Ticket Number <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Seat Number <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Steward Comments <span class="mandatory">*</span></label>
                                <textarea class="form-control" row="2"></textarea>
                            </div>
                        </div>
                        <div class="col-md-9 align-self-end">
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

    <?php include 'scripts.php';?>

</body>
</html>