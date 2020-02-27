<!doctype html>
<html lang="en">

<?php include 'head-files.php';?>

<body>

    <?php include 'header.php';?>

    <!-- Wrapper -->
    <section class="slide-out">
        <!-- Body Content -->
        <div class="container-fluid">
            <h2 class="title">Steward Requested</h2>
            <div class="main-container">

                <?php include 'toaster.php';?>

                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th style="width:15%;">Vendor</th>
                                        <th style="width:15%;">Requested Stewards</th>
                                        <th style="width:15%;">Promised Stewards</th>
                                        <th style="width:35%;">Comments</th>
                                        <th style="width:10%;" class="text-center" colspan="2"><a href="javascript:void(0);" class="action" data-toggle="modal" data-target="#AddStewards" title="Add"><img src="images/add-item.svg" width="25" /></a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Vendor 1</td>
                                        <td>1000</td>
                                        <td>2000</td>
                                        <td>Condimentum orci himenaeos nibh suspendisse ullamcorper mi tellus imperdiet curae nisi laoreet vitae iaculis gravida per eu in a bibendum ridiculus tellus.</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" data-toggle="modal" data-target="#DeleteModal" title="Delete" ><img src="images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Vendor 2</td>
                                        <td>1000</td>
                                        <td>2000</td>
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
                                <a class="btn btn-secondary updatenext" href="itinerary-plan.php">Cancel</a>
                            </div>
                            <div class="btn-group ml-3">
                                <button type="button" class="btn btn-primary updatebtn">Update</button>
                            </div>
                            <div class="btn-group ml-3">
                                    <a class="btn btn-primary updatenext" href="briefing-document.php">Update & Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <?php include 'events-menu.php';?>
        
    </section>
    
    <!-- Add Stewards Modal -->
    <div class="modal fade" id="AddStewards" tabindex="-1" role="dialog" aria-labelledby="AddStewardsLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AddStewardsLabel">Add Stewards</h5>
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
                                        <label>Vendors <span class="mandatory">*</span></label>
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
                                        <label>Requested Stewards <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Promised Stewards</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Comments</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col align-self-end">
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

    <?php include 'delete-popup.php';?>

    <?php include 'scripts.php';?>

</body>
</html>