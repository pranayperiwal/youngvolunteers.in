<?php 
$cssurl='stylesheet_createOpportunities.css';
$GLOBALS['cssurl'];


include('includes/commonContent.php');
session_start();
if(!(isset($_SESSION['ngoemail'])) && $_SESSION['ngoemail']=='')
    header('Location: /volunteer/index.php');

$metaDescription="Create volunteering opportunities for students easily";
$title="Create Opportunities";

?>


<?php  

$toShow = str_replace('DDDDD', $metaDescription, $preHeaderNGO);
$toShow = str_replace('TTTTT', $title, $toShow);
echo $toShow;

?>


<div class="container-fluid">
    <!--sidebar-->
    <?php echo $sidebarNGO ?>


    <!--success alert-->
    <div class='alert alert-success alert-dismissible text-center' role='alert' style='margin-bottom:0; z-index:999;' id="successmsg">Opportunity created successfully!
        <button type='button' class='close' data-dismiss='alert' aria-label='Close' id='alert'>
            <span aria-hidden='true'>&times;</span>
        </button>
    </div>

    <!--failure alert-->
    <div class='alert alert-danger alert-dismissible text-center' role="alert" style='margin-bottom:0; z-index:999;' id="duplicatemsg">Opportunity with the same title already exists! Please choose a different name for the opportunity.
        <button type='button' class="close" data-dismiss='alert' aria-label='Close' id='alertfailure'>
            <span aria-hidden='true'>&times;</span>
        </button>
    </div>
    <div class="row">
        <div class="col" id="formContent">
            <!--content-->
            <div class="content">
                <h1>Create Opportunities</h1>
                <form class="form" id="createOpp" name="formOpp">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="titleJob">Title</label>
                            <sup><i class="fas fa-asterisk"></i></sup>
                            <input class="form-control" id="titleJob" type="text" name="title">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="noOfVol">Number of volunteers</label>
                            <sup><i class="fas fa-asterisk"></i></sup>
                            <input class="form-control" id="noOfVol" type="number" name="number_of_v">
                        </div>
                    </div>

                    <div class="form-row mt-3">
                        <div class="col-md-3">Time Duration <sup><i class="fas fa-asterisk"></i></sup></div>
                        <div class="form-group col-md-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="timeDuration" id="toBeDiscussed" value="toBeDiscussed">
                                <label class="form-check-label" for="toBeDiscussed">To be discussed individually</label>
                            </div>
                        </div>
                        <div class="form-group col-md-5" id="timeblock">
                            <div class="form-check form-check-inline" style="display: block">
                                <input class="form-check-input" type="radio" name="timeDuration" id="chooseDate" value="datePicker">
                                <label class="form-check-label" for="chooseDate">Choose date</label>
                            </div>
                            <div class="datepicker" style="display: none;clear: left" id="date">
                                <div style="display: table-row">
                                    <label for="from" style="display: table-cell" class="p-2">From</label>
                                    <input type="text" id="from" name="from">
                                </div>
                                <div style="display: table-row">
                                    <label for="to" style="display: table-cell" class="p-2">To</label>
                                    <input type="text" id="to" name="to">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row mt-3">
                        <div class="form-group col-md-6">
                            <label for="descritionJob">Description of job</label>
                            <sup><i class="fas fa-asterisk"></i></sup>
                            <textarea class="form-control" id="descritionJob" rows="7" style="resize: none;" name="des"></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="otherDetails">Other details</label>
                            <textarea class="form-control" id="otherDetails" rows="7" style="resize: none;" name="extra"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col text-right">
                            <button class="btn btn-success" type="submit" value="confirm" name="confirm" id="confirmBtn">Confirm</button>

                            <input class="btn btn-danger" type="button" value="Delete" name="delete" id="deleteBtn">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- JavaScript -->
<script src="js/script_createOpportunities.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery-ui-1.12.1/jquery-ui.min.js"></script>


</body>

</html>
