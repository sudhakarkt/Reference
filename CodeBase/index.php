<!doctype html>
<html lang="en">

<?php include 'head-files.php';?>

<body>

    <?php include 'header.php';?>

    <!-- Wrapper -->
    <section class="slide-out">
        <!-- Main Container -->
        <div class="container-fluid">
            <h2 class="title">Event Details</h2>
            <div class="main-container">

                <?php include 'toaster.php';?>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="form-check-inline">
                                <label class="radio-container checked">Single Day Event
                                    <input type="radio" name="radio" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="radio-container">Multi Day Event
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="radio-container">Group Event
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="sub-title">Event Group Details</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Event Group <span class="mandatory">*</span></label>
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
                            <label>Start Date <span class="mandatory">*</span></label>
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
                            <label>End Date <span class="mandatory">*</span></label>
                            <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker2"/>
                                <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                                    <div class="input-group-text"><img src="images/calendar.svg" width="20" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="sub-title">Event Details</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Event Name <span class="mandatory">*</span></label>
                            <input type="text" id="input-tags1" class="demo-default selectized p-0" value="" tabindex="-1">
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
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Event Date <span class="mandatory">*</span></label>
                            <input type="text" id="datepicker1" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Starts On</label>
                            <div class="btn-inline-container row">
                                <button type="button" class="col btn btn-primary selected">Forenoon</button>
                                <button type="button" class="col btn btn-primary ml-1">Afternoon</button>
                                <button type="button" class="col btn btn-primary ml-1">All Day</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Plan Date</label>
                            <input type="text" id="datepicker5" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Event Characteristics</label>
                            <select id="input-tags2" name="" multiple="multiple" class="demo-default selectized p-0" placeholder="Select" tabindex="-1">
                                <option value="CA01">California 1</option>
                                <option value="WY02">Wyoming 2</option>
                                <option value="CO03">Colorado 3</option>
                                <option value="CA04">California 4</option>
                                <option value="WY05">Wyoming 5</option>
                                <option value="CO06">Colorado 6</option>
                                <option value="CA07">California 7</option>
                                <option value="WY08">Wyoming 8</option>
                                <option value="CO09">Colorado 9</option>
                                <option value="CA11">California 11</option>
                                <option value="WY12">Wyoming 12</option>
                                <option value="CO13">Colorado 13</option>
                                <option value="CA14">California 14</option>
                                <option value="WY15">Wyoming 15</option>
                                <option value="CO16">Colorado 16</option>
                                <option value="CA17">California 17</option>
                                <option value="WY18">Wyoming 18</option>
                                <option value="CO19">Colorado 19</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Section <span class="mandatory">*</span></label>
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
                            <label>Notes </label>
                            <textarea class="form-control" rows="1"></textarea>
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
                                        <th>Event Name</th>
                                        <th>Event Category</th>
                                        <th>Plan Date</th>
                                        <th>Event Start Date</th>
                                        <th>Event End Date</th>
                                        <th>Section</th>
                                        <th style="width:15%;">Characteristics</th>
                                        <th style="width:20%;">Notes</th>
                                        <th class="text-center"><a href="javascript:void(0);" class="action" data-toggle="modal" data-target="#AddEventModal" title="Add"><img src="images/add-item.svg" width="25" /></a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Football</td>
                                        <td>Sports</td>
                                        <td>01/01/2019</td>
                                        <td>01/01/2019</td>
                                        <td>01/01/2019</td>
                                        <td>Section 1</td>
                                        <td>Fireworkds, Emotionally Charged.</td>
                                        <td>Ultrices nam arcu habitasse commodo sapien a adipiscing a nunc </td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><i class="far fa-edit"></i></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Delete"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <h4 class="sub-title">Event Organizers</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Primary Incharge <span class="mandatory">*</span></label>
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
                            <label>Secondary Incharge</label>
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
                            <label>Incharge 3</label>
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
                            <label>Incharge 4</label>
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
                    <div class="col action-buttons">
                        <div class="form-group">
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary">Cancel</button>
                            </div>
                            <div class="btn-group ml-3">
                                <button type="button" class="btn btn-primary updatebtn">Update</button>
                            </div>
                            <div class="btn-group ml-3">
                                <a class="btn btn-primary updatenext" href="participating-teams.php">Update & Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'events-menu.php';?>

    </section>
    
    <!-- Add Event Modal -->
    <div class="modal fade" id="AddEventModal" tabindex="-1" role="dialog" aria-labelledby="AddEventModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AddEventModalLabel">Add Event</h5>
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
                                        <label>Event Name <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control">
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
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Plan Date</label>
                                        <input type="text" id="datepicker6" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Event Start Date <span class="mandatory">*</span></label>
                                        <input type="text" id="datepicker7" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Event End Date</label>
                                        <input type="text" id="datepicker8" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Section <span class="mandatory">*</span></label>
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
                                        <label>Event Characteristics</label>
                                        <textarea class="form-control" rows="1"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="col-md-5">Notes</label>
                                        <textarea class="form-control" rows="1"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
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
    </div>

    <?php include 'scripts.php';?>

    <script>
    $('#input-tags1').selectize({
        delimiter: ',',
        persist: false,
        create: function(input) {
            return {
                value: input,
                text: input
            }
        }
    });

    $('#input-tags2').selectize({
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