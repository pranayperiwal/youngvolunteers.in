<?php 

$cssurl='stylesheet_searchOpportunities.css';
include('includes/commonContent.php');
include('includes/searchOpp.php');
if(!(isset($_SESSION['fname'])) && $_SESSION['fname']=='')
    header('Location: /volunteer/index.php');

$metaDescription="Search from our list of extensive NGO partners where you can have the chance of helping";
$title="Search for Opportunities";


?>



<!--Navigation Bar-->
<?php  

$toShow = str_replace('DDDDD', $metaDescription, $preHeaderVol);
$toShow = str_replace('TTTTT', $title, $toShow);
echo $toShow;

?>


<!--Navigation Bar-->
<?php// echo $navbarLoggedIn ?>

<!--success alert-->
<div class='alert alert-success alert-dismissible text-center' role='alert' style='margin-bottom:0; z-index:999;' id="successmsg">Application successful!
    <button type='button' class='close' data-dismiss='alert' aria-label='Close' id='alert'>
        <span aria-hidden='true'>&times;</span>
    </button>
</div>

<!--failure alert-->
<div class='alert alert-danger alert-dismissible text-center' role="alert" style='margin-bottom:0; z-index:999;' id="duplicatemsg">Your request has already been received by the NGO! Please wait till confirmation.
    <button type='button' class="close" data-dismiss='alert' aria-label='Close' id='alertfailure'>
        <span aria-hidden='true'>&times;</span>
    </button>
</div>


<div class="container-fluid">
    <!--sidebar-->
    <div id="sidebar" class="side-nav">

        <a class="navbar-brand" href="profilePageVolunteer.php">
            <h1 class="logo">logo</h1>
        </a>
        <h4 class="welcome"> Welcome</h4>
        <ul id="sidebarWrap">
            <li class="nav-item">
                <a class="nav-link" id="profile" href="profilePageVolunteer.php"><i class="fas fa-user" style="padding-right: 7px"></i>Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="engage" href="engagementsV.php"><i class="fas fa-suitcase" style="padding-right: 7px"></i>Engagements</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="search" href="searchOpportunities.php"><i class="fas fa-search" style="padding-right: 7px"></i>Search opportunities</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="logout" href="logout.php"><i class="fas fa-sign-out-alt" style="padding-right: 7px"></i>Log out</a>
            </li>
        </ul>

        <!--Filter by type-->
        <div class="searchBox" id="typeFilter">
            <div class="nav-link mt-2 pb-0"><i class="fas fa-filter" style="padding-right: 7px"></i>Filter by Type</div>
            <div class="containFilters">
                <div class="custom-control custom-checkbox ">
                    <input type="checkbox" class="custom-control-input" id="oldAgeV" rel="Old">
                    <label class="custom-control-label" for="oldAgeV">Old Age</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="blindV" rel="Blind">
                    <label class="custom-control-label" for="blindV">Blind</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="dumbV" rel="Dumb">
                    <label class="custom-control-label" for="dumbV">Dumb</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="deafV" rel="Deaf">
                    <label class="custom-control-label" for="deafV">Deaf</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="mentChallV" rel="Mentally">
                    <label class="custom-control-label" for="mentChallV">Mentally challeneged</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="phyChallV" rel="Physically">
                    <label class="custom-control-label" for="phyChallV">Physically challenged</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="schoolV" rel="School">
                    <label class="custom-control-label" for="schoolV">School</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="othersV" rel="Others">
                    <label class="custom-control-label" for="othersV">Others</label>
                </div>
            </div>
        </div>

        <!--Filter by time-->
        <div class="searchBox" id="timeFilter">
            <div class="nav-link mt-2 pb-0"><i class="fas fa-filter" style="padding-right: 7px"></i>Filter by Time</div>
            <div class="sliderTime">
                <label for="amount">Number of weeks:</label>
                <input type="text" id="amount" readonly style="border:0; color:inherit; font-weight:bold; margin: 1em;background-color: inherit">
            </div>
            <div id="slider" class="ml-4 mr-4"></div>
        </div>
        <br>

    </div>

    <!--content-->
    <div class="content">
        <h1 style="text-align: center" class="pt-2" id="heading">Search for opportunities</h1>
        <!--tile-->
        <?php foreach($opportunities as $opportunity) { ?>
        <div class="row <?php echo $opportunity['weeks']; ?>weeks" id="<?php echo $opportunity['id']; ?>">
            <div class="col cardContent">
                <div class="content">
                    <div class="card <?php echo implode(" ", explode(",",$opportunity['type'])); ?> ">
                        <h3 class="card-header">
                            <?php echo $opportunity['name']; ?>
                        </h3>
                        <div class="card-body" style="padding: 0;">
                            <h4 class="card-title p-3" id="roleV">
                                <?php echo $opportunity['title']; ?>
                            </h4>
                            <div class="containerCard">
<!--                                <img class="imgNGO img-fluid img" style="float: right" <?php echo $opportunity['img-ngo']; ?> alt="NGO">-->
                                <div class="description">
                                    <p class="card-text">
                                        <?php echo $opportunity['description']; ?>
                                    </p>
                                </div>
                            </div>
                            <p class="card-text pl-3 "><span style="font-weight:bold">NGO type: </span>
                                <?php echo $opportunity['type']; ?>
                            </p>
                            <p class="card-text pl-3"><span style="font-weight:bold">No. of weeks: </span>
                                <?php if($opportunity['weeks']==0)
                                    echo "To be decided" ;
                                  else
                                      echo $opportunity['weeks'];
                            ?>
                            </p>
                            <p class="card-text pl-3 "><span style="font-weight:bold">Total number of volunteers accepted: </span>
                                <?php echo $opportunity['numberOfV']; ?>
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="card-text text-left" style="display: inline-block">
                                <span style="font-weight:bold" class="start" aria-describedby="<?php echo $opportunity['startdate']; ?>">Start date: </span>
                                <?php echo $opportunity['startdate']; ?>
                                <span style="font-weight:bold" class="end" aria-describedby="<?php echo $opportunity['enddate']; ?>">End date: </span>
                                <?php echo $opportunity['enddate']; ?>
                            </div>
                            <div class="text-right float-right">
                                <button type="button" class="btn btn-success" style="width: 10rem;" data-toggle="modal" data-target="#modal<?php echo $opportunity['id']; ?>">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

        <!--modal-->
        <?php foreach($opportunities as $opportunity) { ?>
        <div class="modal fade" id="modal<?php echo $opportunity['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ngoName">Name of NGO</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 id="title<?php echo $opportunity['id']; ?>" value="<?php echo $opportunity['title']; ?>">Title:
                            <?php echo $opportunity['title']; ?>
                        </h5>
                        <br>
                        <p class="card-text">
                            <?php echo $opportunity['description']; ?>
                        </p>
                        <hr>
                        <span style="font-weight:bold">Extra information:</span>
                        <br>
                        <p>
                            <?php echo $opportunity['extra']; ?>
                        </p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" id="<?php echo $opportunity['id']; ?>" class="btn btn-primary confirm">Confirm application</button>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<!--footer-->
    <?php echo $footer; ?>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- JavaScript -->
<script src="js/jquery-ui-1.12.1/jquery-ui.min.js"></script>

<script src="js/script_searchOpportunities.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>



</body>

</html>
