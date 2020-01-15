<?php 
$cssurl='stylesheet_presentOpportunities.css';
$GLOBALS['cssurl'];


include('includes/commonContent.php');
include('includes/presentOpp.php');
if(!(isset($_SESSION['ngoemail'])) && $_SESSION['ngoemail']=='')
    header('Location: /volunteer/index.php');

$metaDescription="The present opportunities that you have running for your NGO";
$title="Present Opportunities";

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
        <h1 style="text-align: center" class="pt-2" id="heading">Present opportunities</h1>

        <div class="row">
            <div class="col align-left mt-3">
                <h5 id="total">Total: <span style="color: #1fad73">
                        <?php echo sizeof($presentOpps) ?> </span></h5>
            </div>
        </div>
        <!--tile-->
        <?php foreach($presentOpps as $presentOpp) { ?>

        <div class="row">
            <div class="col cardContent">
                <div class="content">
                    <div class="card" style="">
                        <h3 class="card-header">Title:
                            <?php echo $presentOpp['title']; ?>
                        </h3>
                        <div class="card-body" style="padding: 0;">
                            <p class="p-3" id="des"><span style="font-weight:bold">Description:</span>
                                <?php echo $presentOpp['description']; ?>
                            </p>
                            <div class="containerCard">
                                <div class="description">
                                    <p class="card-text"><span style="font-weight:bold">Total number of volunteers: </span>
                                        <?php echo $presentOpp['numberOfV']; ?>
                                    </p>
                                    <p class="card-text "><span style="font-weight:bold">Start date: </span>
                                        <?php echo $presentOpp['startdate']; ?>
                                    </p>
                                    <p class="card-text "><span style="font-weight:bold">End date: </span>
                                        <?php echo $presentOpp['enddate']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right status">
                            <button type="button" class="btn btn-success" value="click" data-toggle="modal" data-target="#modal<?php echo $presentOpp['id']; ?>" id="<?php echo $presentOpp['id']; ?>">Complete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

        <!--Modal -->
        <?php foreach($presentOpps as $presentOpp) { ?>
        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="ModalLabel<?php echo $presentOpp['id']; ?>" id="modal<?php echo $presentOpp['id']; ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel<?php echo $presentOpp['id']; ?>">Complete opportunity:
                            <?php echo $presentOpp['title']; ?>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you would like to complete the present opportunitiy?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success complete" id="confirm<?php echo $presentOpp['id']; ?>">Confirm</button>
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
<script src="js/script_presentOpportunities.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>

</html>
