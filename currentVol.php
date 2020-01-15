<?php 
$cssurl='stylesheet_currentVol.css';
$GLOBALS['cssurl'];


include('includes/commonContent.php');
include('includes/currentV.php');
if(!(isset($_SESSION['ngoemail'])) && $_SESSION['ngoemail']=='')
    header('Location: /volunteer/index.php');


$metaDescription="List of your current volunteers";
$title="Current Volunteers";

?>


<?php  

$toShow = str_replace('DDDDD', $metaDescription, $preHeaderNGO);
$toShow = str_replace('TTTTT', $title, $toShow);
echo $toShow;

?>



<div class="container-fluid">
    <!--sidebar-->
    <?php echo $sidebarNGO ?>

    <!--content-->
    <div class="content">
        <h1 style="text-align: center" class="pt-2" id="heading">Current Volunteers</h1>
        <div class="row">
            <div class="col align-left mt-3">
                <h5 id="total">Total: <span style="color: #1fad73"><?php echo sizeof($currentVs) ?> </span></h5>
            </div>
        </div>
        <!--tile-->
        <?php foreach($currentVs as $currentV) { ?>
        <div class="row">
            <div class="col cardContent">
                <div class="content">
                    <div class="card">
                        <h3 class="card-header">
                            <?php echo $currentV['fname']." "; echo $currentV['lname'];?>
                        </h3>
                        <div class="card-body" style="padding: 1em;">
                            <!--                        <img class="imgV img-fluid img mb-2" style="float: right;" <?php echo $currentV['img-vol']; ?> alt="Volunteer">-->
                            <div class="containerCard">
                                <div class="description">
                                    <h4 class="p-3" id="title">Title:
                                        <?php echo $currentV['title']; ?>
                                    </h4>
                                    <p class="card-text">
                                        <?php echo $currentV['description']; ?>
                                    </p>
                                </div>
                                <hr>
                                <div class="description">
                                    <div class="card-text text-left" style="display: inline-block">
                                        <span style="font-weight:bold">Start date: </span>
                                        <?php echo $currentV['start']; ?>
                                        <span style="font-weight:bold">End date: </span>
                                        <?php echo $currentV['end']; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="description">
                                    <span style="font-weight:bold">Contact Information:</span>
                                    <br>
                                    <p class="card-text" style="display:inline">Email:
                                        <?php echo $currentV['email']; ?>&nbsp;&nbsp;</p>
                                    <p class="card-text">Number:
                                        <?php echo $currentV['number']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-left">
                            <button type="button" class="btn btn-success" style="width: 10rem;" data-toggle="modal" data-target="#modal<?php echo $currentV['id']; ?>" id="<?php echo $currentV['id']; ?>">complete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

        <!--Modal -->
        <?php foreach($currentVs as $currentV) { ?>
        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="ModalLabel<?php echo $currentV['id']; ?>" id="modal<?php echo $currentV['id']; ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel<?php echo $currentV['id']; ?>">
                            <?php echo $currentV['fname']; ?>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you would like to complete the work by <span style="font-weight:bold">
                                <?php echo $currentV['fname']; ?></span> for <span style="font-weight:bold">
                                <?php echo $currentV['title']; ?></span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success complete" id="confirm<?php echo $currentV['id']; ?>">Confirm</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/script_currentVol.js"></script>



</body>

</html>
