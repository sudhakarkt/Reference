<!doctype html>
<html lang="en">
    
<?php include 'head-files.php';?>

<body>

    <?php include 'header.php';?>

    <!-- Wrapper -->
    <section class="slide-out">
        <!-- Body Content -->
        <div class="container-fluid">
            <h2 class="title">Zone Allocation</h2>
            <div class="main-container">
                
                <?php include 'toaster.php';?>

                <div class="row">
                    <div class="col">
                        <nav>
                            <div class="nav nav-tabs" id="floorTab" role="tablist">
                                <a class="nav-item nav-link active" id="floor1-tab" data-toggle="tab" href="#floor1" role="tab" aria-controls="floor1" aria-selected="true">Floor 1 <span>(1/2)</span></a>
                                <a class="nav-item nav-link" id="floor2-tab" data-toggle="tab" href="#floor2" role="tab" aria-controls="floor2" aria-selected="false">Floor  <span>(1/2)</span></a>
                                <a class="nav-item nav-link" id="floor3-tab" data-toggle="tab" href="#floor3" role="tab" aria-controls="floor3" aria-selected="false">Floor 03 <span>(5/7)</span></a>
                                <a class="nav-item nav-link" id="floor4-tab" data-toggle="tab" href="#floor4" role="tab" aria-controls="floor4" aria-selected="false">Floor 4 <span>(1/2)</span></a>
                                <a class="nav-item nav-link" id="floor5-tab" data-toggle="tab" href="#floor5" role="tab" aria-controls="floor5" aria-selected="false">Floor 5 <span>(1/2)</span></a>
                                <a class="nav-item nav-link" id="floor6-tab" data-toggle="tab" href="#floor6" role="tab" aria-controls="floor6" aria-selected="false">Floor 6<span>(1/2)</span></a>
                                <a class="nav-item nav-link" id="floor7-tab" data-toggle="tab" href="#floor7" role="tab" aria-controls="floor7" aria-selected="false">Floor 7<span>(5/7)</span></a>
                            </div>
                        </nav>
                        <div class="tab-content" id="floorTabContent">
                            <div class="tab-pane fade show active" id="floor1" role="tabpanel" aria-labelledby="floor1-tab">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="javascript:void(0);" class="add-zone" title="Add Zone" data-toggle="modal" data-target="#AddZone"><img src="images/add-item.svg" width="25"></a>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group mb-2 row">
                                                    <label class="col-md-5 align-self-center zone-title">Zone 1</label>
                                                    <div class="col-md-7 text-right">
                                                        <span>Allocated</span>
                                                        <label class="switch float-right">
                                                            <input type="checkbox" checked>
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 row">
                                                    <label class="col-md-5 align-self-center m-0">Zone Incharge</label>
                                                    <div class="col-md-7">
                                                        <select class="form-control">
                                                            <option>Select</option>
                                                            <option>Northern Eastern</option>
                                                            <option>Middle East</option>
                                                            <option>South East</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group mb-2 row">
                                                    <label class="col-md-5 align-self-center zone-title">Zone 2</label>
                                                    <div class="col-md-7 text-right">
                                                        <span>Allocated</span>
                                                        <label class="switch float-right">
                                                            <input type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 row">
                                                    <label class="col-md-5 align-self-center m-0">Zone Incharge</label>
                                                    <div class="col-md-7">
                                                        <select class="form-control" disabled>
                                                            <option>Select</option>
                                                            <option>Northern Eastern</option>
                                                            <option>Middle East</option>
                                                            <option>South East</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group mb-2 row">
                                                    <label class="col-md-5 align-self-center zone-title">Zone 3</label>
                                                    <div class="col-md-7 text-right">
                                                        <span>Allocated</span>
                                                        <label class="switch float-right">
                                                            <input type="checkbox" checked>
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 row">
                                                    <label class="col-md-5 align-self-center m-0">Zone Incharge</label>
                                                    <div class="col-md-7">
                                                        <select class="form-control">
                                                            <option>Select</option>
                                                            <option>Northern Eastern</option>
                                                            <option>Middle East</option>
                                                            <option>South East</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <img src="images/map.jpg" class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="floor2" role="tabpanel" aria-labelledby="floor2-tab">Floor 2</div>
                            <div class="tab-pane fade" id="floor3" role="tabpanel" aria-labelledby="floor3-tab">Floor 3</div>
                            <div class="tab-pane fade" id="floor4" role="tabpanel" aria-labelledby="floor4-tab">Floor 4</div>
                            <div class="tab-pane fade" id="floor5" role="tabpanel" aria-labelledby="floor5-tab">Floor 5</div>
                            <div class="tab-pane fade" id="floor6" role="tabpanel" aria-labelledby="floor6-tab">Floor 6</div>
                            <div class="tab-pane fade" id="floor7" role="tabpanel" aria-labelledby="floor7-tab">Floor 7</div>
                            <div class="tab-pane fade" id="floor8" role="tabpanel" aria-labelledby="floor8-tab">Floor 8</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col action-buttons">
                        <div class="form-group">
                            <div class="btn-group">
                                    <a class="btn btn-secondary updatenext" href="team-allocation.php">Cancel</a>
                            </div>
                            <div class="btn-group ml-3">
                                <button type="button" class="btn btn-primary updatebtn">Update</button>
                            </div>
                            <div class="btn-group ml-3">
                                <a class="btn btn-primary updatenext" href="itinerary-plan.php">Update & Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include 'events-menu.php';?>

    </section>

    <!-- AddZone Modal -->
    <div class="modal fade" id="AddZone" tabindex="-1" role="dialog" aria-labelledby="AddZoneTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="AddZoneTitle">Add Zone</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="row mb-5">
                        <div class="col-md-3 align-self-end">
                            <div class="form-group m-0">
                                <label>Zone Name <span class="mandatory">*</span></label>
                                <input type="text" id="datepicker5" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-3 align-self-end">
                            <div class="form-control m-0">Allocate
                                <label class="switch float-right">
                                    <input type="checkbox" checked="">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 align-self-end">
                            <div class="form-group m-0">
                                <label>Incharge</label>
                                <input type="text" id="datepicker5" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-3 text-right align-self-end">
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