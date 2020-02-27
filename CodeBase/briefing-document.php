<!doctype html>
<html lang="en">

<?php include 'head-files.php';?>

<body>

    <?php include 'header.php';?>

    <!-- Wrapper -->
    <section class="slide-out">
        <!-- Body Content -->
        <div class="container-fluid">
            <h2 class="title">Briefing Documents</h2>
            <div class="main-container">

                <?php include 'toaster.php';?>
                
                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width:5%;">#</th>
                                        <th style="width:80%;">Document</th>
                                        <th class="text-center" style="width:15%;">Applicable</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Document 1</td>
                                        <td class="text-center">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>Document 1</td>
                                        <td class="text-center">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>Document 1</td>
                                        <td class="text-center">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td>Document 1</td>
                                        <td class="text-center">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col action-buttons">
                        <div class="form-group">
                            <div class="btn-group">
                                    <a class="btn btn-secondary updatenext" href="steward-allocation.php">Cancel</a>
                            </div>
                            <div class="btn-group ml-3">
                                <button type="button" class="btn btn-primary updatebtn">Update</button>
                            </div>
                            <div class="btn-group ml-3">
                                    <a class="btn btn-primary updatenext" href="event-peaps-rules.php">Update & Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <?php include 'events-menu.php';?>

    </section>
    
    <!-- jQuery v3.2.1 -->
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