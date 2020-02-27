<!doctype html>
<html lang="en">

<?php include 'head-files.php';?>

<body>

    <?php include 'header.php';?>

    <!-- Wrapper -->
    <section class="slide-out">
        <!-- Body Content -->
        <div class="container-fluid">
            <h2 class="title">Event Check List</h2>
            <div class="main-container">
                <div class="row">
                    <div class="col minheight">
                        <div class="col text-center">Please <a href="javascript:void(0);" class="link-underline" data-toggle="modal" data-target="#EventChecklistModal">Select Template </a>to view checklist</div>
                    </div>
                </div>            
            </div>
        </div>
        

        <?php include 'events-menu.php';?>
        
    </section>
    
    <!-- Event Checklist Modal -->
    <div class="modal fade" id="EventChecklistModal" tabindex="-1" role="dialog" aria-labelledby="EventChecklistModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EventChecklistModalLabel">Template</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
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
                    <div class="row">
                        <div class="col">
                            <div class="accordion" id="EventChecklistAccordion">
                                <div class="card">
                                    <div class="card-header active" id="headingOne">
                                        <h5 class="collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Stock <i class="material-icons">arrow_drop_down</i></h5>
                                    </div>
                                
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#EventChecklistAccordion">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" style="width:5%;">#</th>
                                                        <th style="width:30%;">Requirement</th>
                                                        <th style="width:20%;">Mandatory</th>
                                                        <th style="width:20%;">Priority</th>
                                                        <th class="text-center" style="width:25%;">Expected</th>
                                                        <th class="text-center" style="width:5%;"><a href="javascript:void(0);" class="action" title="Action"><img src="images/add-item.svg" width="25"></a></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td>PDAs</td>
                                                        <td><span class="danger-alert">Mandatory</span></td>
                                                        <td><span class="danger-alert">High Priority</span></td>
                                                        <td class="text-center">10</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td>Team 1</td>
                                                        <td><span class="warning-alert">Optional</span></td>
                                                        <td><span class="success-alert">Low Priority</span></td>
                                                        <td class="text-center">10</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td>PDAs</td>
                                                        <td><span class="danger-alert">Mandatory</span></td>
                                                        <td><span class="success-alert">Low Priority</span></td>
                                                        <td class="text-center">10</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td>Team 1</td>
                                                        <td><span class="warning-alert">Optional</span></td>
                                                        <td><span class="danger-alert">High Priority</span></td>
                                                        <td class="text-center">1200</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Equipments <i class="material-icons">arrow_drop_down</i></h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#EventChecklistAccordion">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" style="width:5%;">#</th>
                                                        <th style="width:30%;">Requirement</th>
                                                        <th style="width:20%;">Mandatory</th>
                                                        <th style="width:20%;">Priority</th>
                                                        <th class="text-center" style="width:25%;">Expected</th>
                                                        <th class="text-center" style="width:5%;"><a href="javascript:void(0);" class="action" title="Action"><img src="images/add-item.svg" width="25"></a></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td>PDAs</td>
                                                        <td><span class="danger-alert">Mandatory</span></td>
                                                        <td><span class="danger-alert">High Priority</span></td>
                                                        <td class="text-center">10</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td>Team 1</td>
                                                        <td><span class="warning-alert">Optional</span></td>
                                                        <td><span class="success-alert">Low Priority</span></td>
                                                        <td class="text-center">10</td>
                                                        <td></td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td>PDAs</td>
                                                        <td><span class="danger-alert">Mandatory</span></td>
                                                        <td><span class="success-alert">Low Priority</span></td>
                                                        <td class="text-center">10</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td>Team 1</td>
                                                        <td><span class="warning-alert">Optional</span></td>
                                                        <td><span class="danger-alert">High Priority</span></td>
                                                        <td class="text-center">1200</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Medical <i class="material-icons">arrow_drop_down</i></h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#EventChecklistAccordion">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" style="width:5%;">#</th>
                                                        <th style="width:30%;">Requirement</th>
                                                        <th style="width:20%;">Mandatory</th>
                                                        <th style="width:20%;">Priority</th>
                                                        <th class="text-center" style="width:25%;">Expected</th>
                                                        <th class="text-center" style="width:5%;"><a href="javascript:void(0);" class="action" title="Action"><img src="images/add-item.svg" width="25"></a></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td>PDAs</td>
                                                        <td><span class="danger-alert">Mandatory</span></td>
                                                        <td><span class="danger-alert">High Priority</span></td>
                                                        <td class="text-center">10</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td>Team 1</td>
                                                        <td><span class="warning-alert">Optional</span></td>
                                                        <td><span class="success-alert">Low Priority</span></td>
                                                        <td class="text-center">10</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td>PDAs</td>
                                                        <td><span class="danger-alert">Mandatory</span></td>
                                                        <td><span class="success-alert">Low Priority</span></td>
                                                        <td class="text-center">10</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td>Team 1</td>
                                                        <td><span class="warning-alert">Optional</span></td>
                                                        <td><span class="danger-alert">High Priority</span></td>
                                                        <td class="text-center">1200</td>
                                                        <td></td>
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
                </div>
            </div>
        </div>
    </div>
    
    <?php include 'scripts.php';?>

</body>
</html>