<!doctype html>
<html lang="en">

<?php include 'head-files.php';?>

<body>

    <?php include 'header.php';?>

    <!-- Wrapper -->
    <section class="slide-out">
        <!-- Body Content -->
        <div class="container-fluid">
            <h2 class="title">Itinerary Plan</h2>
            <div class="main-container">

                <?php include 'toaster.php';?>
                
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Event Name <span class="mandatory">*</span></label>
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
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Itinerary Name</th>
                                        <th>Person In Change</th>
                                        <th>Itinerary Type</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Zone</th>
                                        <th>Section</th>
                                        <th style="width:30%;">Description</th>
                                        <th class="text-right"><a href="javascript:void(0);" class="action" data-toggle="modal" data-target="#AddItinerary"><img src="images/add-item.svg" width="25" /></a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Brazil Vs Germany</td>
                                        <td>Arun</td>
                                        <td>Event</td>
                                        <td>08/01/2019 12:00 PM</td>
                                        <td>08/01/2019 06:00 PM</td>
                                        <td>Zone 1</td>
                                        <td>Play Area</td>
                                        <td>Condimentum orci himenaeos nibh suspendisse ullamcorper mi tellus imperdiet curae nisi laoreet vitae iaculis gravida per eu in a bibendum ridiculus tellus.</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Delete" data-toggle="modal" data-target="#DeleteModal" title="Delete"><img src="images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>Brazil Vs Germany</td>
                                        <td>Arun</td>
                                        <td>Fringilla.</td>
                                        <td>08/01/2019 12:00 PM</td>
                                        <td>08/01/2019 06:00 PM</td>
                                        <td>Zone 2</td>
                                        <td>Conference Hall</td>
                                        <td>Ultrices nam arcu habitasse commodo sapien a adipiscing a nunc maecenas ad tellus penatibus laoreet scelerisque a est.</td>
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
                
                <div class="row mt-3">
                    <div class="col action-buttons">
                        <div class="form-group">
                            <div class="btn-group">
                                    <a class="btn btn-secondary updatenext" href="zone-allocation.php">Cancel</a>
                            </div>
                            <div class="btn-group ml-3">
                                <button type="button" class="btn btn-primary updatebtn">Update</button>
                            </div>
                            <div class="btn-group ml-3">
                                    <a class="btn btn-primary updatenext" href="steward-requested.php">Update & Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'events-menu.php';?>
        
    </section>
    
    <?php include 'scripts.php';?>

    <!-- Add Itinerary Modal -->
    <div class="modal fade" id="AddItinerary" tabindex="-1" role="dialog" aria-labelledby="AddItinerary" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered calendar-minheight" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AddItinerary">Add Itinerary</h5>
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
                                        <label>Itinerary Name</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Person In Change<span class="mandatory">*</span></label>
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
                                        <label>Itinerary Type<span class="mandatory">*</span></label>
                                        <div class="btn-inline-container row">
                                            <button type="button" class="col btn btn-primary selected">Event</button>
                                            <button type="button" class="col btn btn-primary ml-1">Miscellaneous</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Section</label>
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
                                        <label>Start Time <span class="mandatory">*</span></label>
                                        <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                                            <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                                <div class="input-group-text"><img src="images/calendar.svg" width="20" /></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>End Time <span class="mandatory">*</span></label>
                                        <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker3"/>
                                            <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                                                <div class="input-group-text"><img src="images/calendar.svg" width="20" /></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Zone</label>
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
                                        <label>Description</label>
                                        <textarea class="form-control" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Comments</label>
                                        <textarea class="form-control" rows="1"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Itinerary Priority</label>
                                        <div class="col nobackground-hideselection pl-0">
                                            <input type="text" name="exp-expressive" data-provide="slider" data-slider-ticks="[1, 2, 3, 4, 5, 6]" data-slider-min="1" data-slider-max="10" data-slider-step="1" data-slider-value="3" data-slider-tooltip="hide" data-slider-ticks-labels='["1", "6"]'>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 align-self-center">
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
    </div>

    <?php include 'delete-popup.php';?>

</body>
</html>