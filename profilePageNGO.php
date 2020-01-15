<?php 
$cssurl='stylesheet_profile_NGO.css';

include('includes/commonContent.php');
include('includes/config.php');

session_start();
if(!(isset($_SESSION['ngoemail'])) && $_SESSION['ngoemail']=='')
    header('Location: /volunteer/index.php');

$ngotype_array = explode(',',$_SESSION['ngotype']);
//trimmed array
$trimmed = array_map('trim', $ngotype_array); 

$metaDescription="Profile details of the NGO";
$title="About Us";

?>


<?php  

$toShow = str_replace('DDDDD', $metaDescription, $preHeaderNGO);
$toShow = str_replace('TTTTT', $title, $toShow);
echo $toShow;

?>

<!--Navigation Bar-->
<?php //echo $navbarLoggedIn ?>

<div class="container-fluid">
    <!--sidebar-->
    <?php echo $sidebarNGO ?>
    <!--success alert-->
    <div class='alert alert-success alert-dismissible d-none' role='alert' style='margin-bottom:0; z-index:999;' id="successmsg">Update successful!
        <button type='button' class='close' data-dismiss='alert' aria-label='Close' id='alert'>
            <span aria-hidden='true'>&times;</span>
        </button>
    </div>
    
    <div class="row">
        <div class="col" id="formContent">
            <!--content-->
            <div class="content">
                <h1>About Us</h1>
                <form class="form" id="updateform">
                    <!--Personal Information-->
                    <fieldset>
                        <legend style="border-bottom: 2px solid #797979;" class="pt-4 mb-3">Personal Information<div style="font-size: 12px;">Of person incharge for volunteers</div>
                        </legend>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="fNamePN">First Name</label>
                                <sup><i class="fas fa-asterisk"></i></sup>
                                <input class="form-control" name="persfname" id="fNamePN" type="text" value="<?php echo $_SESSION['persfname'];?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lNamePN">Last Name</label>
                                <sup><i class="fas fa-asterisk"></i></sup>
                                <input class="form-control" name="perslname" id="lNamePN" type="text" value="<?php echo $_SESSION['perslname'];?>">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="positionPN">Position at the NGO</label>
                                <sup><i class="fas fa-asterisk"></i></sup>
                                <input class="form-control" name="perspos" id="positionPN" type="text" value="<?php echo $_SESSION['perspos'];?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="numberPN">Phone Number</label>
                                <sup><i class="fas fa-asterisk"></i></sup>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">+91</span>
                                    </div>
                                    <input class="form-control" name="persphone" type="tel" placeholder="1234567890" maxlength="10" id="numberPN" value="<?php echo $_SESSION['persphone'];?>">
                                </div>
                            </div>
                        </div>

                    </fieldset>

                    <!--NGO information-->
                    <fieldset>
                        <legend style="border-bottom: 2px solid #797979" class="pt-4 mb-3">NGO information</legend>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="ngoname">Name of NGO</label>
                                <sup><i class="fas fa-asterisk"></i></sup>
                                <input class="form-control" name="ngoname" id="ngoname" type="text" value="<?php echo $_SESSION['ngoname'];?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ngoemail">Email</label>
                                <sup><i class="fas fa-asterisk"></i></sup>
                                <input class="form-control" name="ngoemail" id="ngoemail" type="email" value="<?php echo $_SESSION['ngoemail'];?>" readonly>
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="ngophone1">Phone Number 1</label>
                                <sup><i class="fas fa-asterisk"></i></sup>
                                <div class="input-group">
                                    <input class="form-control" name="ngophone1" type="tel" placeholder="080 12345678" maxlength="11" id="ngophone1" value="<?php echo $_SESSION['ngophone1'];?>">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ngophone2">Phone Number 2</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">+91</span>
                                    </div>
                                    <input class="form-control" name="ngophone2" type="tel" placeholder="1234567890" maxlength="10" id="ngophone2" value="<?php echo $_SESSION['ngophone2'];?>">
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6" id="type">
                                <div>
                                    <label id="typelabel">Type of NGO</label>
                                    <sup><i class="fas fa-asterisk" id="typeasterisk"></i></sup>

                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="type[]" type="checkbox" value=" Blind" id="blind" name="type" <?php if(in_array("Blind",$trimmed)) echo "checked" ; ?>>
                                    <label class="form-check-label" for="blind">
                                        Blind
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="type[]" type="checkbox" value=" Dumb" id="dumb" name="type" <?php if(in_array("Dumb",$trimmed)) echo "checked" ; ?>>
                                    <label class="form-check-label" for="dumb">
                                        Dumb
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="type[]" type="checkbox" value=" Deaf" id="deaf" name="type" <?php if(in_array("Deaf",$trimmed)) echo "checked" ; ?>>
                                    <label class="form-check-label" for="deaf">
                                        Deaf
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="type[]" type="checkbox" value=" Old Age" id="oldAge" name="type" <?php if(in_array("Old Age",$trimmed)) echo "checked" ; ?>>
                                    <label class="form-check-label" for="oldAge">
                                        Old Age
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="type[]" type="checkbox" value=" Mentally Challenged" id="menCha" name="type" <?php if(in_array("Mentally Challenged",$trimmed)) echo "checked" ; ?>>
                                    <label class="form-check-label" for="menCha">
                                        Mentally challeneged
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="type[]" type="checkbox" value=" Physically Challenged" id="phyCha" name="type" <?php if(in_array("Physically Challenged",$trimmed)) echo "checked" ; ?>>
                                    <label class="form-check-label" for="phyCha">
                                        Physically challenged
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="type[]" type="checkbox" value=" School for underprivileged" id="school" name="type" <?php if(in_array("School for underprivileged",$trimmed)) echo "checked" ; ?>>
                                    <label class="form-check-label" for="school">
                                        School for underprivileged
                                    </label>
                                </div>
                                <div class="form-check" id="othersdiv">
                                    <input class="form-check-input" name="type[]" type="checkbox" value=" Others" id="others" name="type" <?php if(in_array("Others",$trimmed)) echo "checked" ; ?>>
                                    <label class="form-check-label" for="others">
                                        Others
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ngodescrition">Description of NGO</label>
                                <sup><i class="fas fa-asterisk"></i></sup>
                                <textarea class="form-control" name="ngodes" id="ngodescrition" rows="5" style="resize: none;"><?php echo $_SESSION['ngodes'];?></textarea>
                            </div>
                        </div>

                        <h4>Address<sup><i class="fas fa-asterisk" style="font-size:0.5em"></i></sup></h4>

                        <div class="form-row">
                            <div class="form-group col">
                                <label for="line1ngo">Line 1:</label>
                                <textarea class="form-control" name="ngoline1add" id="line1ngo" rows="1" style="resize: none;"><?php echo $_SESSION['ngoline1add'];?></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="line2ngo">Line 2:</label>
                                <textarea class="form-control" name="ngoline2add" id="line2ngo" rows="1" style="resize: none;"><?php echo $_SESSION['ngoline2add'];?></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="cityNGO">City</label>
                                <textarea class="form-control mr-4" name="city" id="cityNGO" rows="1" style="resize: none;"><?php echo $_SESSION['city'];?></textarea>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="pincodeNGO">Pincode</label>
                                <textarea class="form-control mr-4" name="pincode" id="pincodeNGO" rows="1" style="resize: none;"><?php echo $_SESSION['pincode'];?></textarea>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="stateNGO">State</label>
                                <select class="custom-select" id="stateNGO" name="state">
                                    <option name="AP" value="AP" <?php if($_SESSION['state']=='AP' ) echo "selected" ; ?>>Andhra Pradesh</option>
                                    <option name="AR" value="AR" <?php if($_SESSION['state']=='AR' ) echo "selected" ; ?>>Arunachal Pradesh</option>
                                    <option name="AS" value="AS" <?php if($_SESSION['state']=='AS' ) echo "selected" ; ?>>Assam</option>
                                    <option name="BR" value="BR" <?php if($_SESSION['state']=='BR' ) echo "selected" ; ?>>Bihar</option>
                                    <option name="CT" value="CT" <?php if($_SESSION['state']=='CT' ) echo "selected" ; ?>>Chhattisgarh</option>
                                    <option name="GA" value="GA" <?php if($_SESSION['state']=='GA' ) echo "selected" ; ?>>Goa</option>
                                    <option name="GJ" value="GJ" <?php if($_SESSION['state']=='GJ' ) echo "selected" ; ?>>Gujarat</option>
                                    <option name="HR" value="HR" <?php if($_SESSION['state']=='HR' ) echo "selected" ; ?>>Haryana</option>
                                    <option name="JK" value="JK" <?php if($_SESSION['state']=='HP' ) echo "selected" ; ?>>Jammu and Kashmir</option>
                                    < option name="HP" value="HP" <?php if($_SESSION['state']=='HP' ) echo "selected" ; ?>>Himachal Pradesh</option>
                                        <option name="JH" value="JH" <?php if($_SESSION['state']=='JH' ) echo "selected" ; ?>>Jharkhand</option>
                                        <option name="KA" value="KA" <?php if($_SESSION['state']=='KA' ) echo "selected" ; ?>>Karnataka</option>
                                        <option name="KL" value="KL" <?php if($_SESSION['state']=='KL' ) echo "selected" ; ?>>Kerala</option>
                                        <option name="MP" value="MP" <?php if($_SESSION['state']=='MP' ) echo "selected" ; ?>>Madhya Pradesh</option>
                                        <option name="MH" value="MH" <?php if($_SESSION['state']=='MH' ) echo "selected" ; ?>>Maharashtra</option>
                                        <option name="MN" value="MN" <?php if($_SESSION['state']=='MN' ) echo "selected" ; ?>>Manipur</option>
                                        <option name="ML" value="ML" <?php if($_SESSION['state']=='ML' ) echo "selected" ; ?>>Meghalaya</option>
                                        <option name="MZ" value="MZ" <?php if($_SESSION['state']=='MZ' ) echo "selected" ; ?>>Mizoram</option>
                                        <option name="NL" value="NL" <?php if($_SESSION['state']=='NL' ) echo "selected" ; ?>>Nagaland</option>
                                        <option name="OR" value="OR" <?php if($_SESSION['state']=='OR' ) echo "selected" ; ?>>Odisha</option>
                                        <option name="PB" value="PB" <?php if($_SESSION['state']=='PB' ) echo "selected" ; ?>>Punjab</option>
                                        <option name="RJ" value="RJ" <?php if($_SESSION['state']=='RJ' ) echo "selected" ; ?>>Rajasthan</option>
                                        <option name="SK" value="SK" <?php if($_SESSION['state']=='SK' ) echo "selected" ; ?>>Sikkim</option>
                                        <option name="TN" value="TN" <?php if($_SESSION['state']=='TN' ) echo "selected" ; ?>>Tamil Nadu</option>
                                        <option name="TG" value="TG" <?php if($_SESSION['state']=='TG' ) echo "selected" ; ?>>Telangana</option>
                                        <option name="TR" value="TR" <?php if($_SESSION['state']=='TR' ) echo "selected" ; ?>>Tripura</option>
                                        <option name="UT" value="UT" <?php if($_SESSION['state']=='UT' ) echo "selected" ; ?>>Uttarakhand</option>
                                        <option name="UP" value="UP" <?php if($_SESSION['state']=='UP' ) echo "selected" ; ?>>Uttar Pradesh</option>
                                        <option name="WB" value="WB" <?php if($_SESSION['state']=='WB' ) echo "selected" ; ?>>West Bengal</option>
                                        <option name="AN" value="AN" <?php if($_SESSION['state']=='AN' ) echo "selected" ; ?>>Andaman and Nicobar Islands</option>
                                        <option name="CH" value="CH" <?php if($_SESSION['state']=='CH' ) echo "selected" ; ?>>Chandigarh</option>
                                        <option name="DN" value="DN" <?php if($_SESSION['state']=='DN' ) echo "selected" ; ?>>Dadra and Nagar Haveli</option>
                                        <option name="DD" value="DD" <?php if($_SESSION['state']=='DD' ) echo "selected" ; ?>>Daman and Diu</option>
                                        <option name="DL" value="DL" <?php if($_SESSION['state']=='DL' ) echo "selected" ; ?>>Delhi</option>
                                        <option name="LD" value="LD" <?php if($_SESSION['state']=='LD' ) echo "selected" ; ?>>Lakshadweep</option>
                                        <option name="PY" value="PY" <?php if($_SESSION['state']=='PY' ) echo "selected" ; ?>>Puducherry</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
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
<script src="js/script_logged_NGO.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGKBAy2HtYFTfzDnA3sbyjXjSlGEGdt3U"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


</body>

</html>
