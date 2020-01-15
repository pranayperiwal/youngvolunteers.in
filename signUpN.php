<?php 
$cssurl='stylesheet_register.css';
$GLOBALS['cssurl'];


include('includes/commonContent.php');
include('includes/config.php');


$metaDescription="Sign up as a NGO to gain access to hundreds of volunteers";
$title="NGO registration";

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

<!--success alert-->
<div class='alert alert-success alert-dismissible d-none text-center' role='alert' style='margin-bottom:0; z-index:999;' id="successmsg">Registration successful!
    <a data-toggle='modal' data-target='#loginModal' style='text-decoration: underline; cursor:pointer;' id='alerta'> Login </a>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close' id='alertsuccess'>
        <span aria-hidden='true' class="close">&times;</span>
    </button>
</div>

<!--failure alert-->
<div class='alert alert-danger alert-dismissible d-none text-center' role="alert" style='margin-bottom:0; z-index:999;' id="duplicatemsg">Email already exists! Register with another email address or click
    <a data-toggle='modal' data-target='#loginModal' style='text-decoration: underline; cursor:pointer;' id='alerta'> here </a>to login.
    <button type='button' class="close" aria-label='Close' id='alertfailure'>
        <span aria-hidden='true'>&times;</span>
    </button>
</div>

<!--Background-->
<div id="bg1">
    <div id="table" style="height: 100%; width: 100%; padding-top: 3em;">
        <div id="tableContent" class="container">
            <h1>Register as a NGO</h1>
            <form class="form" id="registerForm">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="content-form">
                            <label for="NGOName" class="col-form-label">NGO Name <sup><i class="fas fa-asterisk"></i></sup></label>
                            <input class="form-control" type="text" id="NGOName" name="ngo_name">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="content-form">
                            <label for="emailV" class="col-form-label">NGO email <sup><i class="fas fa-asterisk"></i></sup></label>
                            <input class="form-control" type="email" placeholder="johndoe@example.com" id="emailN" name="email">
                            <small class="form-text float-right">This will serve as your login ID</small>
                        </div>
                    </div>
                </div>
                 <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="content-form">
                            <label for="passwordn" class="col-form-label">Password <sup><i class="fas fa-asterisk"></i></sup></label>
                            <input class="form-control" type="password" id="passwordn" name="password">

                        </div>

                    </div>
                    <div class="form-group col-md-6">
                        <div class="content-form">
                            <label for="cPasswordN" class="col-form-label">Confirm Password <sup><i class="fas fa-asterisk"></i></sup></label>
                            <input class="form-control" type="password" id="cPasswordN" name="conpassword">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="content-form">
                            <label for="fName" class="col-form-label">First Name <sup><i class="fas fa-asterisk"></i></sup></label>
                            <input class="form-control" type="text" placeholder="John" id="fName" name="fname">
                            <small class="form-text float-right">Detail of person registering</small>
                        </div>

                    </div>
                    <div class="form-group col-md-6">
                        <div class="content-form">
                            <label for="lName" class="col-form-label">Last Name <sup><i class="fas fa-asterisk"></i></sup></label>
                            <input class="form-control" type="text" placeholder="Doe" id="lName" name="lname">
                            <small class="form-text float-right">Detail of person registering</small>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="content-form">
                            <label for="numberV" class="col-form-label">Phone Number <sup><i class="fas fa-asterisk"></i></sup></label>
                            <div class="input-group" id="numpers">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">+91</span>
                                </div>
                                <input class="form-control" type="tel" placeholder="1234567890" id="numberNP" name="num_pers">
                            </div>
                            <small class="form-text float-right">Detail of person registering</small>

                        </div>

                    </div>
                    <div class="form-group col-md-6">
                        <div class="content-form">
                            <label for="numberV" class="col-form-label">NGO Telephone Number <sup><i class="fas fa-asterisk"></i></sup></label>
                            <input class="form-control" type="tel" placeholder="(080)12345678" id="numberN" name="num_ngo">
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col content-form">
                        <button class="btn btn-success btn-lg float-right mb-2" value="register" name="register" type="submit" id="registerbtnn">Register</button>
                    </div>
                </div>

               
                <!--
                <div class="form-group row">
                    <label for="NGOName" class="col-md-4 col-form-label">NGO Name <sup><i class="fas fa-asterisk"></i></sup></label>
                    <div class="col-md-8">
                        <input class="form-control" type="text" id="NGOName" name="ngo_name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fName" class="col-md-4 col-form-label">First Name <sup><i class="fas fa-asterisk"></i></sup></label>
                    <div class="col-md-8">
                        <input class="form-control" type="text" placeholder="John" id="fName" name="fname">
                        <small class="form-text float-right">Detail of person registering</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lName" class="col-md-4 col-form-label">Last Name <sup><i class="fas fa-asterisk"></i></sup></label>
                    <div class="col-md-8">
                        <input class="form-control" type="text" placeholder="Doe" id="lName" name="lname">
                        <small class="form-text float-right">Detail of person registering</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="numberV" class="col-md-4 col-form-label">Phone Number <sup><i class="fas fa-asterisk"></i></sup></label>
                    <div class="col-md-8">
                        <div class="input-group" id="numpers">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+91</span>
                            </div>
                            <input class="form-control" type="tel" placeholder="1234567890" id="numberNP" name="num_pers">
                        </div>
                        <small class="form-text float-right">Detail of person registering</small>

                    </div>
                </div>
-->
                <!--
                <div class="form-group row">
                    <label for="numberV" class="col-md-4 col-form-label">NGO Telephone Number <sup><i class="fas fa-asterisk"></i></sup></label>
                    <div class="col-md-8">
                        <input class="form-control" type="tel" placeholder="(080)12345678" id="numberN" name="num_ngo">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="emailV" class="col-md-4 col-form-label">NGO email <sup><i class="fas fa-asterisk"></i></sup></label>
                    <div class="col-md-8">
                        <input class="form-control" type="email" placeholder="johndoe@example.com" id="emailN" name="email">
                        <small class="form-text float-right">This will serve as your login ID</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="passwordn" class="col-md-4 col-form-label">Password <sup><i class="fas fa-asterisk"></i></sup></label>
                    <div class="col-md-8">
                        <input class="form-control" type="password" id="passwordn" name="password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cPasswordN" class="col-md-4 col-form-label">Confirm Password <sup><i class="fas fa-asterisk"></i></sup></label>
                    <div class="col-md-8">
                        <input class="form-control" type="password" id="cPasswordN" name="conpassword">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-success btn-lg float-right mb-2" value="register" name="register" type="submit" id="registerbtnn">Register</button>
                    </div>
                </div>
-->

            </form>
        </div>
        <!--tablecontent end-->
    </div>
    <!--table end-->
</div>

<!--Footer-->
<?php echo $footer ?>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- JavaScript -->
<script src="js/script_signupN.js"></script>
<script src="js/script_login_modal.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>

</html>
