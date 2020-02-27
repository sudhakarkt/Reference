<!doctype html>
<html lang="en">

<?php include 'head-files.php';?>

<body>

    <?php include 'header.php';?>

    <!-- Wrapper -->
    <section class="slide-out">
        <!-- Body Content -->
        <div class="container-fluid">
            <h2 class="title">PO Creation</h2>
            <div class="main-container">
                <div class="row">
                    <div class="col minheight">
                        <div class="col text-center">Please <a href="javascript:void(0);" class="link-underline" data-toggle="modal" data-target="#SelectTemplate">Select Template </a>to view checklist</div>
                    </div>
                </div>            
            </div>
        </div>

        <?php include 'events-menu.php';?>
        
    </section>
    
    <!-- Template Modal -->
    <div class="modal fade" id="SelectTemplate" tabindex="-1" role="dialog" aria-labelledby="SelectTemplateTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Template</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <div class="form-group m-0">
                                <label>Select Template</label>
                                <select class="form-control">
                                    <option>Select</option>
                                    <option>Northern Eastern</option>
                                    <option>Middle East</option>
                                    <option>South East</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 align-self-end">
                            <button type="button" class="btn btn-primary border-radius">Choose</button>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width:10%">#</th>
                                            <th style="width:10%">Section</th>
                                            <th>Floor</th>
                                            <th>Zone</th>
                                            <th>Position</th>
                                            <th>Min - Max</th>
                                            <th>Certification Rdq</th>
                                            <th>Certifications</th>
                                            <th>Comments</th>
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
                                            <td>YES</td>
                                            <td>Cert 1, Cert 2, Cert 3, Cert 4...</td>
                                            <td>Sociosqu parturient quis</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>Section 1</td>
                                            <td>Floor 1</td>
                                            <td>Zone 1</td>
                                            <td>Position 1</td>
                                            <td>4 - 6</td>
                                            <td>YES</td>
                                            <td>Cert 1, Cert 2, Cert 3, Cert 4...</td>
                                            <td>Sociosqu parturient quis</td>
                                        </tr>
                                    </tbody>
                                </table>
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