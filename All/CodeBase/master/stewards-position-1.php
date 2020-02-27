<!doctype html>
<html lang="en">
    
<?php include 'master-head-files.php';?>

<body>

    <?php include 'master-header.php';?>

    <!-- Wrapper -->
    <section>
        <div class="container-fluid">
            <h2 class="title">Stewards Position Template</h2>
            <div class="main-container">
                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width:5%">#</th>
                                        <th style="width:10%">Section</th>
                                        <th style="width:10%">Floor</th>
                                        <th style="width:7%">Zone</th>
                                        <th style="width:8%">Position</th>
                                        <th style="width:8%">Min - Max</th>
                                        <th style="width:15%">Certification Required?</th>
                                        <th style="width:12%">Certifications</th>
                                        <th style="width:10%">Comments</th>
                                        <th style="width:15%" class="text-right"><a href="javascript:void(0);" data-toggle="modal" data-target="#StewardPositionModal" title="Add"><img src="../images/add-item.svg" width="25" /></a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Section 1</td>
                                        <td>Floor 1</td>
                                        <td>Zone 1</td>
                                        <td>Position 1</td>
                                        <td>4 - 6</td>
                                        <td>Yes</td>
                                        <td>Cert 1, Cert 2, Cert 3, Cert 4c,...</td>
                                        <td>Sociosqu parturient quis</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#DeleteModal" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>Section2</td>
                                        <td>Floor2</td>
                                        <td>Zone2</td>
                                        <td>Position2</td>
                                        <td>4 - 6</td>
                                        <td>Yes</td>
                                        <td>Cert 1, Cert 2, Cert 3, Cert 4c,...</td>
                                        <td>Sociosqu parturient quis</td>
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
    
    <!-- Steward Position Modal -->
    <div class="modal fade" id="StewardPositionModal" tabindex="-1" role="dialog" aria-labelledby="StewardPositionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="StewardPositionModalLabel">Add Steward Position</h5>
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
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Floor <span class="mandatory">*</span></label>
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
                                        <label>Zone <span class="mandatory">*</span></label>
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
                                        <label>Position <span class="mandatory">*</span></label>
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
                                        <label>Min</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Max</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3 align-self-end">
                                    <div class="form-group">
                                        <div class="form-control">Certification Required?
                                            <label class="switch float-right">
                                                <input type="checkbox" checked="">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Certifications <span class="mandatory">*</span></label>
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
                                        <label>Comments <span class="mandatory">*</span></label>
                                        <textarea class="form-control" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-9 align-self-end">
                                    <div class="form-group text-right">
                                        <div class="btn-group">
                                            <button type="button" data-dismiss="modal" >Cancel</button>
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