<?php 
$cssurl='stylesheet_contactUs.css';
$GLOBALS['cssurl'];


include('includes/commonContent.php');

$metaDescription="Reach out to us for any information that you need";
$title="Contact Us";

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
    <div style="height: 100%; width: 100%; padding-top: 5em;" class="container">
        <h1>Contact Us</h1>
        <div class="row">
            <div class="col">
                <div style="display: table;" class="container mt-4" id="container">
                    <div class="row" style="display: table-cell; vertical-align: middle; text-align: left">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="content-form">
                                        <label for="fName" class="col-form-label">First Name</label>
                                        <sup><i class="fas fa-asterisk"></i></sup>
                                        <input type="text" class="form-control" id="fName" placeholder="John">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="content-form">
                                        <label for="lName" class="">Last Name</label>
                                        <sup><i class="fas fa-asterisk"></i></sup>
                                        <input type="text" class="form-control" id="lName" placeholder="Doe">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="content-form">
                                        <label for="email">Email</label>
                                        <sup><i class="fas fa-asterisk"></i></sup>
                                        <input type="email" class="form-control" id="email" placeholder="Email ID">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="content-form">
                                        <label for="number">Phone number</label>
                                        <sup><i class="fas fa-asterisk"></i></sup>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">+91</span>
                                            </div>
                                            <input class="form-control" type="tel" placeholder="9876543210" id="number">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="content-form">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="selectType" id="ngo" value="option1" checked>
                                            <label class="form-check-label" for="ngo">
                                                NGO
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="selectType" id="volunteer" value="option2">
                                            <label class="form-check-label" for="volunteer">
                                                Volunteer
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="content-form">
                                        <label for="textMessage">Your message</label>
                                        <sup><i class="fas fa-asterisk"></i></sup>
                                        <textarea class="form-control" id="descritionJob" rows="4" style="resize: none;" placeholder="Your message goes here..."></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-success float-right mb-2" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="sec mt-4">
                    <div id="contactInfo">
                        <p style="font-size:1.2em; color:white">You can contact us directly at:</p>
                        <p> inquiries@youngvolunteers.in </p>
                        <p> +91 9819326369 </p>
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
<script src="js/script_contactUs.js"></script>
<script src="js/script_login_modal.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>

</html>
