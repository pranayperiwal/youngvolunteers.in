<?php 


$preHeader='
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="DDDDD">

        <title>TTTTT</title>


        <!-- Bootstrap CSS -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <link rel="stylesheet" href="js/jquery-ui-1.12.1/jquery-ui.min.css">
        <link rel="shortcut icon" type="image/png" href="images/Logo/top-logo-32px.png">
        <link rel="stylesheet" href="css/stylesheet_beforelogin.css">
        <link rel="stylesheet" href="css/'.$cssurl.'">
        <link href="https://fonts.googleapis.com/css?family=Handlee|Raleway" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    </head>
    <body> ';

$preHeaderVol='
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="DDDDD">

        <title>TTTTT</title>


        <!-- Bootstrap CSS -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <link rel="stylesheet" href="js/jquery-ui-1.12.1/jquery-ui.min.css">
        <link rel="shortcut icon" type="image/png" href="images/Logo/top-logo-32px.png">
        <link rel="stylesheet" href="css/stylesheet_common_vol.css">
        <link rel="stylesheet" href="css/'.$cssurl.'">
        <link href="https://fonts.googleapis.com/css?family=Handlee|Raleway" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    </head>
    <body> ';

$preHeaderNGO='
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="DDDDD">

        <title>TTTTT</title>


        <!-- Bootstrap CSS -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <link rel="stylesheet" href="js/jquery-ui-1.12.1/jquery-ui.min.css">
        <link rel="shortcut icon" type="image/png" href="images/Logo/top-logo-32px.png">
        <link rel="stylesheet" href="css/stylesheet_common_ngo.css">
        <link rel="stylesheet" href="css/'.$cssurl.'">
        <link href="https://fonts.googleapis.com/css?family=Handlee|Raleway" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    </head>
    <body> ';

$navbar='<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="nav">

            <a class="navbar-brand" href="index.php"><h1 class="logo">logo</h1></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>            
            </button>

            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="navbar-nav ml-auto w-100 justify-content-end">
                    <li class="nav-item home">
                        <a class="nav-link" href="index.php" id="home">Home</a>
                        <span class="sr-only">(current)</span>
                    </li>
                    <li class="nav-item about">
                        <a class="nav-link" href="aboutUs.php">About Us</a>
                    </li>
                    <li class="nav-item stories">
                        <a class="nav-link" href="ourStories.php">Our Stories</a>
                    </li>
                    <li class="nav-item partners">
                        <a class="nav-link" href="ourPartners.php">Our Partners</a>
                    </li>
                    <li class="nav-item contact">
                        <a class="nav-link" href="contactUs.php">Contact Us</a>
                    </li>
                    <li class="nav-item faq">
                        <a class="nav-link" href="faq.php">FAQ</a>
                    </li>
                </ul>
                <div class="btn-group">
                    <button class="btn btn-success ml-2 mr-2" id="loginBtn" type="button" data-toggle="modal" data-target="#loginModal">Log in</button>
                    ';

if(basename($_SERVER['PHP_SELF'])!='index.php'){
    $navbar.=' <button type="button" class="btn btn-primary dropdown-toggle" id="signUpBtn" data-toggle="dropdown" aria-              haspopup="true" aria-expanded="false">
                        Sign Up
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="signUpN.php">For NGOs</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="signUpV.php">For volunteers</a>
                </div>';
}

$navbar.='</div>
            </div>
        </nav>';


$sidebarVolunteers='<div id="sidebar" class="side-nav">
        
        <a class="navbar-brand" href="profilePageVolunteer.php"><h1 class="logo">logo</h1></a>
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
                <a class="nav-link" id="support" href="support.php"><i class="fas fa-question-circle" style="padding-right: 7px"></i>Support</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="logout" href="logout.php"><i class="fas fa-sign-out-alt" style="padding-right: 7px"></i>Log out</a>
            </li>
        </ul>
        
        <small class="copyright">&copy;Young Volunteers</small>
    </div>';

$sidebarNGO='<div id="sidebar" class="side-nav">
        
        <a class="navbar-brand" href="profilePageVolunteer.php"><h1 class="logo">logo</h1></a>
        <h4 class="welcome"> Welcome</h4>
                <ul id="sidebarWrap">
                    <li class="nav-item">
                        <a class="nav-link" id="profileN" href="profilePageNGO.php"><i class="fas fa-user" style="padding-right: 7px"></i>Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="currentReq" href="currentRequests.php"><i class="fas fa-suitcase" style="padding-right: 7px"></i>Current Requests</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="createOpp" href="createOpportunities.php"><i class="fas fa-plus" style="padding-right: 7px"></i>Creating opportunities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="presentOpp" href="presentOpportunities.php"><i class="fas fa-hands-helping" style="padding-right: 7px"></i>Present opportunities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="currentVol" href="currentVol.php"><i class="fas fa-user-clock" style="padding-right: 7px"></i>Current Volunteers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pastVol" href="pastVol.php"><i class="fas fa-user-check" style="padding-right: 7px"></i>Past Volunteers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="support" href="support.php"><i class="fas fa-question-circle" style="padding-right: 7px"></i>Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt" style="padding-right: 7px"></i>Log out</a>
                    </li>
                </ul>
                 <small class="copyright">&copy;Young Volunteers</small>
            </div>';

$loginModal='
<div class="modal fade" tabindex="-1" role="dialog" id="loginModal" aria-labelledby="#loginBtn" aria-hidden="true" style="z-index:9999">
    <div class="modal-dialog" role="form">
        <div class="modal-content">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a href="#loginVolunteer" class="nav-link active" role="tab" data-toggle="tab">Login as Volunteer</a></li>
                <li class="nav-item"><a href="#loginNGO" class="nav-link" role="tab" data-toggle="tab">Login as NGO</a></li>
                <li class="nav-item ml-auto mr-2 mt-2">                            
                    <button type="button" class="close" id="closeButtonModal" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>                            
                </li>
            </ul>
            <div class="tab-content">
                <!--Login for volunteers-->
                <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="loginVolunteer" id="loginVolunteer">
                    <div class="modal-header">
                        <h5 class="modal-title">Login as Volunteer</h5>
                    </div>
                    <div class="modal-body">
                        <form class="form" action="" method="post" id="volLogin">
                            <input type="text" class="form-control mb-3" placeholder="abc@example.com" name="usernameV" id="usernameV">
                            <input type="password" class="form-control mb-3" placeholder="Password" name="passwordV" id="passwordV">
                        </form>
                        <a href="#">Forgetten password?</a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" name="loginV" id="loginV">Submit</button>
                    </div>
                </div>
                <!--Login for NGOs-->
                <div class="tab-pane fade" role="tabpanel" aria-labelledby="loginNGO" id="loginNGO">
                    <div class="modal-header">
                        <h5 class="modal-title">Login as NGO</h5>
                    </div>
                    <div class="modal-body">
                        <form class="form" action="" method="post" id="ngoLogin">
                            <input type="text" class="form-control mb-3" placeholder="abc@example.com" name="usernameN" id="usernameN">
                            <input type="password" class="form-control mb-3" placeholder="Password" name="passwordN" id="passwordN" >
                        </form>
                        <a href="#">Forgetten password?</a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" name="loginN" id="loginN">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  ';

$footer='<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span id="foot_heading">Sitemap</span>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="aboutUs.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ourStories.php">Our Stories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ourPartners.php">Our Partners</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactUs.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4">
                <span id="foot_heading">Contact</span>
                <div style="display: flex;flex-direction: column;justify-content: center; height:90%">
                    <p><i class="fas fa-phone"></i> +91 9819326369</p>
                    <p><i class="fas fa-envelope"></i> inquiries@youngvolunteers.in </p>
                </div>
            </div>
            <div class="col-md-4">
                <span id="foot_heading">Social media</span>
                <div style="display: flex;flex-direction: column;justify-content: center; height:90%">
                    <a href="https://www.instagram.com/youngvolunteers.in/"><i class="fab fa-instagram"></i></a>
                    <br>
                    <a href="https://www.fb.me/youngvolunteers.in"><i class="fab fa-facebook-square"></i> </a>
                </div>
            </div>
        </div>
    </div>

</footer>';

?>
