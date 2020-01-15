<?php 

$cssurl='stylesheet_ourPartners.css';
include('includes/commonContent.php');
include('includes/partners.php');


$metaDescription="Find our elaborate list of partner NGOs where you can have the chance to volunteer";
$title="Our Partners";

?>


<!--Navigation Bar-->
<?php  
$toShow = str_replace('DDDDD', $metaDescription, $preHeader);
$toShow = str_replace('TTTTT', $title, $toShow);
echo $toShow;
echo $navbar; 

?>


<!--Background-->
<div id="bg1">
    <div style="height: 100%; width: 100%; padding-top: 60px;">
        <h1 style="margin-top:15%;">Our Partners</h1>

        <div class="container mt-4">
            
            <p style="font-size: 1.5em;color: #1fad73"> Coming soon...</p>
<!--
             <?php foreach($partners as $partner){ ?>
            <div class="row outerRow light" style="vertical-align: middle; text-align: left;margin: 0.6em;">
                <div class="container">
                    <div class="row innerRow">
                        <div class="col-md-3 img">
                            <img class="img-fluid " <?php echo $partner['logo']; ?> alt="img of ngo">
                        </div>
                        <div class="col-md-6" >
                            <h2><?php echo $partner['name-ngo']; ?></h2>
                            <p><?php echo $partner['description']; ?></p>
                        </div>
                        <div class="col-md-3 img" id="ngo" style="text-align: right">
                            <img class="img-fluid "<?php echo $partner['img-ngo']; ?> alt="img of ngo">
                        </div>
                       

                    </div>
                </div>
            </div>
             <?php } ?>
-->
        </div>
    </div>
</div>  

<!--log in modal-->
<?php echo $loginModal ?>


<!--Footer-->
<?php echo $footer ?>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- JavaScript -->
<script src="js/script_ourPartners.js"></script>
<script src="js/script_login_modal.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>



