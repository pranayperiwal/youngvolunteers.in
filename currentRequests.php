<?php 
$cssurl='stylesheet_currentRequests.css';
$GLOBALS['cssurl'];


include('includes/commonContent.php');
include('includes/currentReq.php');
if(!(isset($_SESSION['ngoemail'])) && $_SESSION['ngoemail']=='')
    header('Location: /volunteer/index.php');

$metaDescription="The current requests for volunteering at your NGO";
$title="Current Requests";

?>


<?php  

$toShow = str_replace('DDDDD', $metaDescription, $preHeaderNGO);
$toShow = str_replace('TTTTT', $title, $toShow);
echo $toShow;

?>

<!--Navigation Bar-->
<?php //echo $navbarLoggedIn ?>



<div class="container-fluid">
    <!--sidebar-->
    <?php echo $sidebarNGO ?>

    <!--content-->
    <div class="content">
        <h1 style="text-align: center" class="pt-2" id="heading">Current Requests</h1>

        <!--total-->
        <div class="row">
            <div class="col align-left mt-3">
                <h5 id="total">Total:
                    <span style="color: #1fad73"> <?php echo sizeof($currentReqs)?> requests</span></h5>
            </div>
        </div>

        <!--tile-->
        <?php foreach($currentReqs as $currentReq) { ?>
        <div class="row">
            <div class="col cardContent">
                <div class="content">
                    <div class="card">
                        <h3 class="card-header">
                            <?php echo $currentReq['fname']." ";echo $currentReq['lname']; ?>
                        </h3>
                        <div class="card-body" style="padding: 0;">
                            <h4 class="card-title p-3" id="roleV">
                                <?php echo $currentReq['title']; ?>
                            </h4>
                            <div class="containerCard">
                                <!--                                <img class="imgNGO img-fluid img" style="float: right" <?php echo $currentReq['imgV']; ?> alt="NGO">-->
                                <div class="description">
                                    <p class="card-text">
                                        <?php echo $currentReq['description']; ?>
                                    </p>
                                </div>
                                <hr>
                                <div class="description">
                                    <span style="font-weight:bold">Experience</span>
                                    <br>
                                    <p class="card-text" style="display:inline">
                                        <?php echo $currentReq['exp']; ?>
                                    </p>
                                </div>
                                <hr>
                                <div class="description">

                                    <span style="font-weight:bold">Extra Information:</span>
                                    <br>
                                    <p class="card-text" style="display:inline">Age:
                                        <?php echo $currentReq['age']; ?>
                                    </p>
                                    <p class="card-text">Education: Grade
                                        <?php echo $currentReq['edu']; ?>
                                    </p>
                                </div>
                                <hr>
                                <div class="description">
                                    <span style="font-weight:bold">Contact Information:</span>
                                    <br>
                                    <p class="card-text" style="display:inline">Email:
                                        <?php echo $currentReq['email']; ?>&nbsp;&nbsp;</p>
                                    <p class="card-text">Number:
                                        <?php echo $currentReq['number']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="button" class="btn btn-success mr-2 confirm" data-toggle="modal" data-target="#confirm<?php echo $currentReq['id']; ?>">Confirm</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!--Confirm Modal -->
        <?php foreach($currentReqs as $currentReq) { ?>
        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="ModalLabel<?php echo $currentReq['id']; ?>" id="confirm<?php echo $currentReq['id']; ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel<?php echo $currentReq['id']; ?>">
                            <?php echo $currentReq['fname']; ?>
                            <?php echo $currentReq['lname']; ?>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Confirm
                            <?php echo $currentReq['fname']; ?> as a volunteer for <span style="font-weight:bold">
                                <?php echo $currentReq['title']; ?></span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success complete" id="con<?php echo $currentReq['id']; ?>">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

    </div>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- JavaScript -->
<script src="js/script_currentRequests.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>

</html>
