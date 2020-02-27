<!doctype html>
<html lang="en">
    
<?php include 'head-files.php';?>

<body>

    <?php include 'header.php';?>

    <!-- Wrapper -->
    <section class="slide-out">
        <div class="container-fluid">
            <!-- Body Content -->
            <h2 class="title">PO Creation</h2>
            <div class="main-container">
                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width:5%">#</th>
                                        <th style="width:8%">Section</th>
                                        <th style="width:8%">Floor</th>
                                        <th style="width:8%">Zone</th>
                                        <th style="width:8%">Position</th>
                                        <th style="width:7%">Min - Max</th>
                                        <th style="width:7%">Certification Rdq</th>
                                        <th style="width:10%">Certification</th>
                                        <th style="width:8%">Comments</th>
                                        <th style="width:7%">Preferred Vendor</th>
                                        <th style="width:7%">Requested Qty</th>
                                        <th style="width:7%">Est.Price(€)Per Hr</th>
                                        <th style="width:7%">Applicable?</th>
                                        <th style="width:3%" class="text-right"><a href="javascript:void(0);" title=""><img src="images/add-item.svg" width="25" /></a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Section 1</td>
                                        <td>Floor 1</td>
                                        <td>Zone 1</td>
                                        <td>Position 1</td>
                                        <td>4 - 5</td>
                                        <td>Yes</td>
                                        <td>Cert 1, Cert 2, Cert 3, Cert 4...</td>
                                        <td>Sociosqu partur</td>
                                        <td>
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>In Progress</option>
                                                <option>Open</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" /></td>
                                        <td><input type="text" class="form-control" /></td>
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
                                        <td>Section 1</td>
                                        <td>Floor 1</td>
                                        <td>Zone 1</td>
                                        <td>Position 1</td>
                                        <td>4 - 5</td>
                                        <td>Yes</td>
                                        <td>Cert 1, Cert 2, Cert 3, Cert 4...</td>
                                        <td>Sociosqu partur</td>
                                        <td>
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>In Progress</option>
                                                <option>Open</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" /></td>
                                        <td><input type="text" class="form-control" /></td>
                                        <td class="text-center">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

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
                                    <label>Min </label>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Max </label>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Comments </label>
                                    <textarea class="form-control" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="col-md-3 align-self-center">
                                <div class="form-group m-0">
                                    <div class="form-control">Certificate Required?
                                        <label class="switch float-right">
                                            <input type="checkbox" checked="">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Map Certificates</label>
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
                                    <label>Preferred Vendor <span class="mandatory">*</span></label>
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
                                    <label>Requested Qty <span class="mandatory">*</span></label>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Est. Price(€) Per Hour * <span class="mandatory">*</span></label>
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

        <?php include 'events-menu.php';?>

    </section>
    
    <!-- jQuery v3.3.1 -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Popper JS 1.12.9 -->   
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap v4.0.0 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Owl Carousel v2.3.4 -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Datepicker Bootstrap v4 GIJGO v1.9.11 -->
    <script src="js/gijgo.min.js"></script>
    <!-- Selectize JS (v0.12.6) -->
    <script src="js/selectize.js"></script>
    <!-- Custom JS -->   
    <script src="js/main.js"></script>

</body>
</html>