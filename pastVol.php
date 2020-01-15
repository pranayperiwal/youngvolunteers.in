<?php 
$cssurl='stylesheet_pastVol.css';
$GLOBALS['cssurl'];


include('includes/commonContent.php');
include('includes/pastV.php');
if(!(isset($_SESSION['ngoemail'])) && $_SESSION['ngoemail']=='')
    header('Location: /volunteer/index.php');


$metaDescription="List of your past volunteers";
$title="Past Volunteers";

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
        <h1 class="pt-2" style="text-align: center" id="heading">Past Volunteers</h1>
        <div class="row">
            <div class="col align-left mt-3">
                <h5 id="total">Total:<span style="color: #1fad73">
                    <?php echo sizeof($pastVs) ?></span>
                </h5>
            </div>
        </div>
        <!--tile-->
        <?php foreach($pastVs as $pastV) { ?>
        <div class="row">
            <div class="col cardContent">
                <div class="content">
                    <div class="card">
                        <h3 class="card-header">
                            <?php echo $pastV['fname']; ?>
                            <?php echo $pastV['lname']; ?>
                        </h3>
                        <div class="card-body" style="padding: 1em;">
                            <!--                        <img class="imgV img-fluid img mb-2" style="float: right;" <?php echo $pastV['img-vol']; ?> alt="NGO">-->
                            <div class="details" style="width: 75%;">
                                <div class="titleVContainer">
                                    <h4 class="p-3" id="title">Title:
                                        <?php echo $pastV['title']; ?>
                                    </h4>
                                </div>
                                <div class="durationVContainer">
                                    <div class="card-text text-left" style="display: inline-block">
                                        <span style="font-weight:bold">Start date: </span>
                                        <?php echo $pastV['start']; ?>
                                        <span style="font-weight:bold">End date: </span>
                                        <?php echo $pastV['end']; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="description">
                                    <span style="font-weight:bold">Contact Information:</span>
                                    <br>
                                    <p class="card-text" style="display:inline">Email:
                                        <?php echo $pastV['email']; ?>&nbsp;&nbsp;</p>
                                    <p class="card-text">Number:
                                        <?php echo $pastV['number']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-left">
                            <button type="button" class="btn btn-success" style="width: 10rem;" data-toggle="modal" data-target="#feedback<?php echo $pastV['id']; ?>" id="<?php echo $pastV['id']; ?>">Give feedback</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>



        <!--Feedback Modal -->
        <?php foreach($pastVs as $pastV) { ?>
        <div class="modal fade" id="feedback<?php echo $pastV['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel<?php echo $pastV['number']; ?>">Feeback for
                            <?php echo $pastV['fname']; ?> for
                            <?php echo $pastV['title']; ?>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="comment">Feedback:</label>
                            <textarea class="form-control" rows="5" style="resize: none;" id="comment"></textarea>
                        </div>
                        <small class="form-text float-right">Feedback will be emailed to
                            <?php echo $pastV['fname']; ?></small>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="send<?php echo $pastV['id']; ?>">Send</button>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>

    </div>
</div>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/script_pastVol.js"></script>



</body>

</html>
