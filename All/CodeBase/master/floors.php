<!doctype html>
<html lang="en">
    
<?php include 'master-head-files.php';?>

<body>

    <?php include 'master-header.php';?>

    <!-- Wrapper -->
    <section>
        <div class="container-fluid">
            <!-- Body Content -->
            <h2 class="title">Floors</h2>
            <div class="main-container">
                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width:5%">#</th>
                                        <th style="width:25%">Section</th>
                                        <th style="width:25%">Floor Name</th>
                                        <th style="width:20%">Capacity</th>
                                        <th style="width:15%">Minimum Required Stewards</th>
                                        <th style="width:15%" class="text-right"><a href="javascript:void(0);" data-toggle="modal" data-target="#AddFloorModal" title="Add"><img src="../images/add-item.svg" width="25" /></a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Section 1</td>
                                        <td>Floor 1</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#DeleteModal" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>Section 2</td>
                                        <td>Floor 2</td>
                                        <td>10</td>
                                        <td>10</td>
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
                
                <div class="row mt-3">
                    <div class="col">
                        <img src="../images/map.jpg" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add Floor Modal -->
    <div class="modal fade" id="AddFloorModal" tabindex="-1" role="dialog" aria-labelledby="AddFloorModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AddFloorModal">Add Floors</h5>
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
                                        <label>Floor Name <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Capacity <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Minimum Required Stewards <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Upload Map <span class="mandatory">*</span></label>
                                        <div class="col-md-12">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">File Select</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 align-self-center">
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

    <?php include '../delete-popup.php';?>
    
    <?php include 'master-scripts.php';?>

</body>
</html>