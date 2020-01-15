<?php 
$cssurl='stylesheet_index.css';
$GLOBALS['cssurl'];


include('includes/commonContent.php');

$metaDescription="The one-stop portal for easy access to volunteering opportunities in the city at different NGOs";
$title="Young Volunteers";

?>
<!--login verfication-->
<?php 
//    if( isset( $_POST["login"] ) ) {
//        
//    // build a function that validates data
//    function validateFormData( $formData ) {
//        $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
//        return $formData;
//    }
//        
//    //create variable and wrap in validation function
//    
//    $formUserV = validateFormData($_POST['usernameV']);
//    $formPassV = validateFormData($_POST['passwordV']);
//    
//    //connect to database
//    include('includes/config.php');
//    }
?>

<!--Navigation Bar-->
<?php  

$toShow = str_replace('DDDDD', $metaDescription, $preHeader);
$toShow = str_replace('TTTTT', $title, $toShow);
echo $toShow;
echo $navbar; 

?>


<!--log in modal-->
<?php echo $loginModal ?>


<!--Background-->
<div id="bg1">
    <div style="height: 100%;display: table; width: 100%">
        <div style="display: table-cell; vertical-align: middle">
            <h1 id="maintext">Volunteer <span style="color: #1fad73">anywhere</span> at the convinience<br> of your finger tips</h1>

            <div id="callToAction">
                <a href="signUpV.php"> <button type="button" id="registerVolunteer" class="btn btn-primary btn-lg">Register as a Volunteer</button></a>

                <a href="signUpN.php"><button type="button" id="registerNGO" class="btn btn-primary btn-lg">Register as a NGO</button></a>
            </div>
        </div>
    </div>
</div>


<!--About Us-->
<section class="lighterSec sec" id="aboutUs">
    <h1>About Us</h1>
    <div class="row content-row">
        <!--        <div class="col-md-2"><img src="images/pranay-cropped.jpeg" id="founderImg"></div>-->
        <div class="col-md-12" style="text-align: left; padding-left: 2em">
            <p style="margin-top:0.7em">This project, started by <span style="font-weight:bold;">Pranay Periwal,</span> is an effort to connect NGOs with volunteers.<br> Volunteers, especially students, wish to give back to society. In order to reduce the communication gap between volunteers and NGOs, YoungVolunteers came alive. <a href="aboutUs.php" class="readMore"> Read More...</a> </p>
        </div>

    </div>

</section>

<!--Our Stories-->
<section class="darkerSec sec" id="ourStories">
    <h1>Our Stories</h1>
    <p style="font-size:1.3em; margin-top:1.2em">Coming soon...
        <!--        <a href="ourStories.php" class="readMore"> Read More...</a> -->
    </p>
</section>

<!--Our Partners-->
<section class="lighterSec sec" id="ourPartners">
    <h1>Our Partners</h1>
    <p style="font-size:1.3em; margin-top:1.2em">Coming soon...
        <!--        <a href="ourPartners.php" class="readMore"> Read More...</a> -->
    </p>
</section>

<!--Contact Us-->
<section class="darkerSec sec" id="contactUs">
    <h1>Contact Us</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p><i class="fas fa-phone"></i> +91 9819326369</p>
            </div>
            <div class="col-md-6">
                <p><i class="fas fa-envelope"></i> inquiries@youngvolunteers.in </p>
            </div>
        </div>
    </div>
    <a href="contactUs.php" class="readMore"> Read More...</a>
</section>


<!--Footer-->
<?php echo $footer ?>




<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- JavaScript -->
<script src="js/script.js"></script>
<script src="js/script_login_modal.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>

</html>
