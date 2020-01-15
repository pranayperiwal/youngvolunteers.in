<?php 
$cssurl='stylesheet_ourStories.css';
//$GLOBALS['cssurl'];


include('includes/commonContent.php');

$metaDescription="Hear about our fascinating experiences of volunteers and NGOs";
$title="Our Stories";

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
        <div style="display: table-cell; vertical-align: middle;">
            <h1 style="margin-bottom: 1em">Our Stories</h1>
            <p style="font-size: 1.5em;color: #1fad73;"> Coming soon...</p>
        </div>
    </div>
</div>
<!--

<section class="sec" id="ourVol">
    <h1 class="secHeading">Our volunteers</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 bgpicVol">
                <p><q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut nisi tempor, vulputate. consectetur adipiscing elit</q></p>
                <p class="quoter">~Full Name</p>
            </div>
            <div class="col-md-4 bgpicVol">
                <p><q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut nisi tempor, vulputate.</q></p>
                <p class="quoter">~Full Name</p>
            </div>
            <div class="col-md-4 bgpicVol">
                <p><q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut nisi tempor, vulputate. consectetur adipiscing elit consectetur adipiscing elit</q></p>
                <p class="quoter">~Full Name</p>
            </div>
        </div>
    </div>

</section>
-->


<!--
<section class="sec" id="ourNGOs">
    <h1 class="secHeading">Our NGOs</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 bgpicVol">
                <p><q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut nisi tempor, vulputate. consectetur adipiscing elit</q></p>
                <p class="quoter">~Full Name</p>
            </div>
            <div class="col-md-4 bgpicVol">
                <p><q>Lorem ipsum dolor sit amet, hello laute ich kan nicht spreceh consectetur adipiscing elit. Nulla ut nisi tempor, vulputate.</q></p>
                <p class="quoter">~Full Name</p>
            </div>
            <div class="col-md-4 bgpicVol">
                <p><q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut nisi tempor, vulputate. consectetur adipiscing elit consectetur adipiscing elit</q></p>
                <p class="quoter">~Full Name</p>
            </div>
        </div>
    </div>

</section>
-->

<!--Footer-->
<?php echo $footer ?>





<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- JavaScript -->
<script src="js/script_ourStories.js"></script>
<script src="js/script_login_modal.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>

</html>
