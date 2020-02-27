<!doctype html>
<html lang="en">

<?php include 'head-files.php';?>

<body>

    <?php include 'header.php';?>

    <!-- Wrapper -->
    <section class="slide-out">
        <!-- Body Content -->
        <div class="container-fluid">
            <h2 class="title">Participating Teams </h2>
            <div class="main-container">

                <?php include 'toaster.php';?>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Expected Aggressive</label>
                            <div class="col nobackground-hideselection pl-0">
                                <input type="text" name="exp-expressive" data-provide="slider" data-slider-ticks="[1, 2, 3, 4, 5, 6, 7, 8, 9, 10]" data-slider-min="1" data-slider-max="10" data-slider-step="1" data-slider-value="4" data-slider-tooltip="hide" data-slider-ticks-labels='["Low", "High"]'>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Probability of Incidents</label>
                            <div class="col pl-0">
                                <input type="text" name="Probability-incident" data-provide="slider" data-slider-ticks="[1, 2, 3, 4]" data-slider-min="1" data-slider-max="4" data-slider-step="1" data-slider-value="2" data-slider-tooltip="hide" data-slider-ticks-labels='["Low", "Medium", "High", "Very High"]'>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Expected Crowd <span class="mandatory">*</span></label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width:5%;">#</th>
                                        <th style="width:31%;">Team</th>
                                        <th style="width:15%;">No.of Players</th>
                                        <th style="width:35%;">Home/Away/NA</th>
                                        <th style="width:14%;"><a href="javascript:void(0);" class="action" data-toggle="modal" data-target="#AddModal" title="Add"><img src="images/add-item.svg" width="25" /></a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Indian Cricket Team</td>
                                        <td>16</td>
                                        <td>Home Team</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" data-toggle="modal" data-target="#DeleteModal" title="Delete"><img src="images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>Pakistan Cricket Team</td>
                                        <td>16</td>
                                        <td>Away Team</td>
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
                <div class="row">
                    <div class="col action-buttons">
                        <div class="form-group">
                            <div class="btn-group">
                                    <a class="btn btn-secondary updatenext" href="index.php">Cancel</a>
                            </div>
                            <div class="btn-group ml-3">
                                <button type="button" class="btn btn-primary updatebtn">Update</button>
                            </div>
                            <div class="btn-group ml-3">
                                    <a class="btn btn-primary updatenext" href="event-checklist-main.php">Update & Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <?php include 'events-menu.php';?>
        
    </section>

    <!-- Add Participating Teams Modal -->
    <div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="AddModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AddModalLabel">Add Participating Teams</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row add-template">
                        <div class="col-md-3 align-content-center">
                            <div class="form-group">
                                <label>Team</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>No of Players</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Home/Away/NA</label>
                                <div class="btn-inline-container row">
                                    <button type="button" class="col btn btn-primary selected">Home</button>
                                    <button type="button" class="col btn btn-primary ml-3">Away</button>
                                    <button type="button" class="col btn btn-primary ml-3">NA</button>
                                </div>
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

    <?php include 'delete-popup.php';?>

    <?php include 'scripts.php';?>
    
</body>
</html>