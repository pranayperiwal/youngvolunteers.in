<?php 

$cssurl='stylesheet_engagementsV.css';
include('includes/commonContent.php');
include('includes/engagements.php');
if(!(isset($_SESSION['fname'])) && $_SESSION['fname']=='')
    header('Location: /volunteer/index.php');

$metaDescription="List of current and previous engagements of the volunteer";
$title="Current/Previous engagements";

?>


<!--Navigation Bar-->
<?php  
$toShow = str_replace('DDDDD', $metaDescription, $preHeaderVol);
$toShow = str_replace('TTTTT', $title, $toShow);
echo $toShow;
//echo $navbarLoggedIn; 

?>




<div class="container-fluid">

    <!--sidebar-->
    <?php echo $sidebarVolunteers?>

    <!--content-->
    <div class="content">
        <h1 style="text-align: center" class="pt-2" id="heading">Current/Previous Engagements</h1>

        <div class="row">
            <div class="col align-left mt-3">
                <h5 id="total">Total:
                    <span style="color: #1fad73"> <?php echo sizeof($engagements)?> engagements</span></h5>
            </div>
        </div>

        <?php foreach($engagements as $engagement) { ?>
        <div class="row">
            <div class="col cardContent">
                <div class="content">
                    <div class="card">
                        <h3 class="card-header">
                            <?php echo $engagement['name']; ?>
                        </h3>
                        <div class="card-body" style="padding: 0;">
                            <h4 class="card-title p-3" id="roleV">Title:
                                <strong><?php echo $engagement['title']; ?></strong>
                            </h4>
                            <div class="containerCard">
<!--                                <img class="imgNGO img-fluid img" style="float: right" <?php echo $engagement['img-ngo']; ?> alt="NGO">-->
                                <div class="description">
                                    <p class="card-text">
                                        <?php echo $engagement['description']; ?>
                                    </p>
                                </div>
                                <hr>
                                <div class="description">
                                    <span style="font-weight:bold">Extra Information:</span>
                                    <br>
                                    <p class="card-text">
                                        <?php echo $engagement['extra']; ?>
                                    </p>
                                </div>
                                <hr>
                                <div class="description">
                                    <span style="font-weight:bold">Dates</span>
                                    <br>
                                    <p class="card-text" style="display:inline">Start date:
                                        <strong> <?php echo $engagement['start']; ?></strong>&nbsp;&nbsp;</p>
                                    <p class="card-text" style="display:inline">End date:
                                       <strong><?php echo $engagement['end']; ?></strong> 
                                    </p>
                                </div>
                                <hr>
                                <div class="description">
                                    <span style="font-weight:bold">Address:</span>
                                    <br>
                                    <p class="card-text" style="">
                                        <?php echo $engagement['line1']; ?></p>
                                    <p class="card-text" style="">
                                        <?php echo $engagement['line2']; ?></p>
                                    <p class="card-text" style="">
                                        <?php echo $engagement['city']; ?> - <?php echo $engagement['pincode']; ?></p>
                                    <p class="card-text" style="">
                                       <?php echo $engagement['state']; ?>
                                    </p>
                                </div>
                                <hr>
                                <div class="description">
                                    <span style="font-weight:bold">Contact Information:</span>
                                    <br>
                                    <p class="card-text" style="display:inline-block">Email:
                                       <strong><?php echo $engagement['ngoemail']; ?></strong>&nbsp;&nbsp;</p>
                                    <p class="card-text" style="display:inline">Number 1:
                                        <strong><?php echo $engagement['ngonum']; ?></strong>&nbsp;&nbsp;
                                    </p>
                                    <p class="card-text"style="display:inline" >Number 2:
                                        <strong><?php echo $engagement['ngonum2']; ?></strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right status"><span style="font-weight:bold">Status: </span>
                            <?php echo $engagement['status']; ?>
                        </div>
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
<script src="js/script_engagementsV.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>

</html>
