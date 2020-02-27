<!doctype html>
<html lang="en">
    
<?php include 'master-head-files.php';?>

<body>

    <?php include 'master-header.php';?>

    <!-- Wrapper -->
    <section>
        <div class="container-fluid">
            <!-- Body Content -->
            <h2 class="title">Settings</h2>
            <div class="main-container">
                <div class="row add-template">
                    <div class="col-md-3">
                        <div class="form-group m-0">
                            <label>Steward Default Access Roles <span class="mandatory">*</span></label>
                            <select class="form-control">
                                <option>Select</option>
                                <option>Northern Eastern</option>
                                <option>Middle East</option>
                                <option>South East</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-9 align-self-end text-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary cancel-btn">Cancel</button>
                        </div>
                        <div class="btn-group ml-3">
                            <button type="button" class="btn btn-primary save-btn">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include 'master-scripts.php';?>
    
</body>
</html>