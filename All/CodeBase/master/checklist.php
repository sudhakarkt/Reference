<!doctype html>
<html lang="en">
    
<?php include 'master-head-files.php';?>

<body>

    <?php include 'master-header.php';?>

    <!-- Wrapper -->
    <section>
        <!-- Main Container -->
        <div class="container-fluid">
            <h2 class="title">Event Checklist</h2>
            <div class="main-container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">
                            <label class="col-md-12">Event Name <span class="mandatory">*</span></label>
                            <div class="col-md-12">
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
                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width:5%;">#</th>
                                        <th style="width:10%;">Template Name</th>
                                        <th style="width:10%;">Event Category</th>
                                        <th style="width:10%;">Checklist Category</th>
                                        <th style="width:10%;">Checklist Item</th>
                                        <th style="width:10%;">Mandatory</th>
                                        <th style="width:10%;">Priority</th>
                                        <th style="width:7%;">Expected</th>
                                        <th style="width:10%;">Split Required?</th>
                                        <th style="width:10%;">Event Schedule?</th>
                                        <th style="width:7%;"><a href="javascript:void(0);" class="action" data-toggle="modal" data-target="#AddEventChecklist" title="Add"><img src="../images/add-item.svg" width="25" /></a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="danger-alert">Mandatory</span></td>
                                        <td><span class="danger-alert">High Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="warning-alert">Optional</span></td>
                                        <td><span class="success-alert">Low Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="warning-alert">Optional</span></td>
                                        <td><span class="success-alert">Low Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Save"><img src="../images/save.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Cancel"><img src="../images/cancel.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="danger-alert">Mandatory</span></td>
                                        <td><span class="danger-alert">High Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="warning-alert">Optional</span></td>
                                        <td><span class="success-alert">Low Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="warning-alert">Optional</span></td>
                                        <td><span class="success-alert">Low Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Save"><img src="../images/save.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Cancel"><img src="../images/cancel.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="danger-alert">Mandatory</span></td>
                                        <td><span class="danger-alert">High Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="warning-alert">Optional</span></td>
                                        <td><span class="success-alert">Low Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="warning-alert">Optional</span></td>
                                        <td><span class="success-alert">Low Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Save"><img src="../images/save.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Cancel"><img src="../images/cancel.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="danger-alert">Mandatory</span></td>
                                        <td><span class="danger-alert">High Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="warning-alert">Optional</span></td>
                                        <td><span class="success-alert">Low Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="warning-alert">Optional</span></td>
                                        <td><span class="success-alert">Low Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Save"><img src="../images/save.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Cancel"><img src="../images/cancel.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="danger-alert">Mandatory</span></td>
                                        <td><span class="danger-alert">High Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="warning-alert">Optional</span></td>
                                        <td><span class="success-alert">Low Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="warning-alert">Optional</span></td>
                                        <td><span class="success-alert">Low Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Save"><img src="../images/save.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Cancel"><img src="../images/cancel.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="danger-alert">Mandatory</span></td>
                                        <td><span class="danger-alert">High Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="warning-alert">Optional</span></td>
                                        <td><span class="success-alert">Low Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="warning-alert">Optional</span></td>
                                        <td><span class="success-alert">Low Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Save"><img src="../images/save.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Cancel"><img src="../images/cancel.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="danger-alert">Mandatory</span></td>
                                        <td><span class="danger-alert">High Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="warning-alert">Optional</span></td>
                                        <td><span class="success-alert">Low Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="warning-alert">Optional</span></td>
                                        <td><span class="success-alert">Low Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Save"><img src="../images/save.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Cancel"><img src="../images/cancel.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="danger-alert">Mandatory</span></td>
                                        <td><span class="danger-alert">High Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="warning-alert">Optional</span></td>
                                        <td><span class="success-alert">Low Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="warning-alert">Optional</span></td>
                                        <td><span class="success-alert">Low Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Save"><img src="../images/save.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Cancel"><img src="../images/cancel.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="danger-alert">Mandatory</span></td>
                                        <td><span class="danger-alert">High Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="warning-alert">Optional</span></td>
                                        <td><span class="success-alert">Low Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="warning-alert">Optional</span></td>
                                        <td><span class="success-alert">Low Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Save"><img src="../images/save.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Cancel"><img src="../images/cancel.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="danger-alert">Mandatory</span></td>
                                        <td><span class="danger-alert">High Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="warning-alert">Optional</span></td>
                                        <td><span class="success-alert">Low Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Template 1</td>
                                        <td>Boxing</td>
                                        <td>Stock</td>
                                        <td>Egestas a iaculis venenatis gravida parturient.</td>
                                        <td><span class="warning-alert">Optional</span></td>
                                        <td><span class="success-alert">Low Priority</span></td>
                                        <td>10</td>
                                        <td>NO</td>
                                        <td>Single Day Event, Multi Day Event</td>
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

    <!-- Add Event Checklist Modal -->
    <div class="modal fade" id="AddEventChecklist" tabindex="-1" role="dialog" aria-labelledby="AddEventChecklistLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AddEventChecklistLabel">Add Event Checklist</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row add-template">
                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Template Name <span class="mandatory">*</span></label>
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
                                        <label>Checklist Category <span class="mandatory">*</span></label>
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
                                        <label>Checklist Item <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Event Category <span class="mandatory">*</span></label>
                                        <div class="btn-inline-container row">
                                            <button type="button" class="col btn btn-primary selected">Mandatory</button>
                                            <button type="button" class="col btn btn-primary ml-1">Optional</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Priority <span class="mandatory">*</span></label>
                                        <div class="btn-inline-container row">
                                            <button type="button" class="col btn btn-primary selected">Low</button>
                                            <button type="button" class="col btn btn-primary ml-1">Medium</button>
                                            <button type="button" class="col btn btn-primary ml-1">High</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group p-0 expected-container">
                                        <label>Expected <span class="mandatory">*</span> 
                                            <div class="expected-options">
                                                <span title="Expected Quality" class="expected-quality-label active">Quantity</span>
                                                <span title="Expected Value" class="expected-value-label">Value</span>
                                            </div>
                                        </label>
                                        <div class="expected-quality-field form-control text-right">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <input type="text" class="form-control expected-value-field">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-control">Split Required?
                                            <label class="switch float-right">
                                                <input type="checkbox" checked="">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Event Schedule</label>
                                        <div class="row">
                                            <div class="col chekbox-bg align-self-center">
                                                <label class="checkbox-container checked">Single Day
                                                    <input type="checkbox" checked>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col chekbox-bg align-self-center">
                                                <label class="checkbox-container">Multi Day
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col chekbox-bg align-self-center">
                                                <label class="checkbox-container">Group Event
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Comments</label>
                                        <textarea rows="1" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-3 text-right">
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

    <?php include '../delete-popup.php';?>

    <?php include 'master-scripts.php';?>

</body>
</html>