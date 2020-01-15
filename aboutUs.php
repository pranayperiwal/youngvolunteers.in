<?php 

$cssurl='stylesheet_aboutUs.css';
include('includes/commonContent.php');


$metaDescription="More details about our mission and about the founder";
$title="About Us";

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
    <div style="height: 100%; width: 100%; padding-top: 5em;">
        <h1>About Us</h1>

        <div class="container mt-4">
            <div class="row outerRow" style="vertical-align: middle; text-align: left;margin: 0.6em;">
                <div class="container">
                    <div class="row innerRow">
                        <div class="col-md-9">
                            <h2>Our Mission</h2>
                            <p style="margin-top:2em;">YoungVolunteers wishes to <span style="color:#1fad73; font-size:1.5em;">connect</span> NGOs and volunteers by providing a common portal for both. Here, NGOs can create opportunities for volunteers and volunteers can sign up for them. We wish to bridge the communication gap so that <span style="color:#1fad73; font-size:1.5em;">giving back to society</span> is not a hassle. </p>
                        </div>
                        <div class="col-md-3" id="ngo" style="text-align: right">
                            <img class="img-fluid img" src="images/sad_face_girl-cropped.jpeg" alt="image of girl">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row outerRow" style="text-align: left;margin: 0.6em;margin-top: 3em; margin-bottom: 3em">
                <div class="container">
                    <div class="row innerRow">
                        <div class="col-md-3" id="founder" style="text-align: left">
                            <img class="img-fluid img" src="images/pranay-cropped.jpeg" alt="image of founder">
                        </div>
                        <div class="col-md-9">
                            <h2>Founder</h2>
                            <p>This initiative was started by <span style="color:#1fad73;font-size:1.5em;">Pranay Periwal.</span><br> Being an IB student and aware of the integral aspect of volunteering and working for society, he started YoungVolunteers. The idea was to allow students to not have to seek all over the internet for volunteering opportunities and rather have a common portal where both parties could engage. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Footer-->
<?php echo $footer ?>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- JavaScript -->
<script src="js/script_aboutUs.js"></script>
<script src="js/script_login_modal.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>

</html>
