<?php 
$cssurl='stylesheet_profile_volunteer.css';
include('includes/commonContent.php');
include('includes/config.php');
session_start();
if(!(isset($_SESSION['fname'])) && $_SESSION['fname']=='')
    header('Location: /volunteer/index.php');



$metaDescription="Profile details of volunteer";
$title="About me";

?>

<?php  

$toShow = str_replace('DDDDD', $metaDescription, $preHeaderVol);
$toShow = str_replace('TTTTT', $title, $toShow);
echo $toShow;

?>


<!--Navigation Bar-->
<?php //echo $navbarLoggedIn ?>

<!--success alert-->
<div class='alert alert-success alert-dismissible d-none' role='alert' style='margin-bottom:0; z-index:999;' id="successmsg">Update successful!
    <button type='button' class='close' data-dismiss='alert' aria-label='Close' id='alert'>
        <span aria-hidden='true'>&times;</span>
    </button>
</div>



<div class="container-fluid">
    <!--sidebar-->
    <?php echo $sidebarVolunteers ?>

    <div class="row">
        <div class="col" id="formContent">
            <!--content-->
            <div class="content">
                <h1>About Me</h1>
                <form class="form" id="updateform">
                    <div class="form-row">
                        <!--First Name-->
                        <div class="form-group col-md-6">
                            <label for="fName">First Name</label>
                            <sup><i class="fas fa-asterisk"></i></sup>
                            <input class="form-control" name="fname" id="fName" type="text" value="<?php echo $_SESSION['fname'];?>">
                        </div>

                        <!--Last Name-->
                        <div class="form-group col-md-6">
                            <label for="lName">Last Name</label>
                            <sup><i class="fas fa-asterisk"></i></sup>
                            <input class="form-control" name="lname" id="lName" type="text" value="<?php echo $_SESSION['lname'];?>">
                        </div>
                    </div>

                    <div class="form-row">

                        <!--Email-->
                        <div class="form-group col-md-6">
                            <label for="emailV">Email</label>
                            <sup><i class="fas fa-asterisk"></i></sup>
                            <input class="form-control" name="email" id="emailV" type="email" value="<?php echo $_SESSION['email'];?>" readonly>
                        </div>

                        <!--Number-->
                        <div class="form-group col-md-6">
                            <label for="numberV">Phone Number</label>
                            <sup><i class="fas fa-asterisk"></i></sup>
                            <div class="input-group" id="number">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">+91</span>
                                </div>
                                <input class="form-control" name="number" type="tel" placeholder="1234567890" id="numberV" value="<?php echo $_SESSION['number'];?>">
                            </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <!--Age-->
                        <div class="form-group col-md-6">
                            <label for="ageV">Age</label>
                            <sup><i class="fas fa-asterisk"></i></sup>
                            <input class="form-control" name="age" id="ageV" type="number" value="<?php echo $_SESSION['age'];?>">
                        </div>

                        <!--DOB-->
                        <div class="form-group col-md-6">
                            <label for="dobV">Date of birth</label>
                            <sup><i class="fas fa-asterisk"></i></sup>
                            <input class="form-control" name="dob" id="dobV" type="date" value="<?php echo $_SESSION['dob'];?>">
                        </div>
                    </div>

                    <div class="form-row">

                        <!--Education-->
                        <div class="form-group col-md-6">
                            <label for="eduV">Education</label>
                            <sup><i class="fas fa-asterisk"></i></sup>
                            <select id="eduV" name="edu" class="form-control">
                                <option <?php if($_SESSION['edu']==NULL) echo "selected" ; ?> >Select</option>
                                <option value="7" <?php if($_SESSION['edu']=='7' ) echo "selected" ; ?>>Grade 7</option>
                                <option value="8" <?php if($_SESSION['edu']=='8' ) echo "selected" ; ?>>Grade 8</option>
                                <option value="9" <?php if($_SESSION['edu']=='9' ) echo "selected" ; ?>>Grade 9</option>
                                <option value="10" <?php if($_SESSION['edu']=='10' ) echo "selected" ; ?>>Grade 10</option>
                                <option value="11" <?php if($_SESSION['edu']=='11' ) echo "selected" ; ?>>Grade 11</option>
                                <option value="12" <?php if($_SESSION['edu']=='12' ) echo "selected" ; ?>>Grade 12</option>
                                <option value="col" <?php if($_SESSION['edu']=='col' ) echo "selected" ; ?>>College</option>
                            </select>
                        </div>

                        <!--Experience-->
                        <div class="form-group col-md-6">
                            <label for="experienceV">Prior volunteering experience</label>
                            <textarea class="form-control" name="exp" id="experienceV" rows="4" style="resize: none;"><?php echo $_SESSION['exp'];?></textarea>
                        </div>
                    </div>

                    <div class="form-row">

                        <!--Bio-->
                        <div class="form-group col-md-6">
                            <label for="description">A few words about me</label>
                            <textarea class="form-control" name="des" id="description" rows="4" style="resize: none;"><?php echo $_SESSION['des'];?></textarea>
                        </div>

                        <!--Picture-->
                        <!--
                        <div class="form-group col-md-6">                            
                            <label for="picV">Your picture</label>
                            <input type="file" class="form-control-file" id="picV" accept=".jpeg, .jpg, .png">
                            <small style="color: red" id="errorPicFile">Please choose .jpg, .jpeg, or .png</small>
                        </div>
-->
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <button class="btn btn-success  float-right mb-2" type="submit" value="update info" name="update" id="updateBtn">Update</button>
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
<script src="js/script_logged_volunteer.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>

</html>
