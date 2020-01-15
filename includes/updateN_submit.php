<?php 
session_start();

include('config.php');
// build a function that validates data
function validateFormData( $formData ) {
    $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
    return $formData;
}


if(isset( $_POST['ngoname']) ){

    $fname= validateFormData( $_POST['persfname'] );
    $lname= validateFormData( $_POST['perslname'] );
    $pos= validateFormData( $_POST['perspos'] );
    $numberPers= validateFormData( $_POST['persphone'] );
    
    $ngoname= validateFormData( $_POST['ngoname'] );
    $email= validateFormData( $_POST['ngoemail'] );
    $numberNGO1= validateFormData( $_POST['ngophone1'] );
    $numberNGO2= validateFormData( $_POST['ngophone2'] );
    
    $_SESSION['ngotype']=$type= validateFormData( implode(',',$_POST['type']) );
    $_SESSION['ngodes']=$des= validateFormData( $_POST['ngodes'] );
    
    $_SESSION['ngoline1add']=$add1= validateFormData( $_POST['ngoline1add'] );
    $_SESSION['ngoline2add']=$add2= validateFormData( $_POST['ngoline2add'] );
    $_SESSION['city']=$city= validateFormData( $_POST['city'] );
    $_SESSION['pincode']=$pin= validateFormData( $_POST['pincode'] );
    $_SESSION['state']=$state= validateFormData( $_POST['state'] );



    $query = "UPDATE `ngo` SET `persfname`='$fname',`perslname`='$lname',`persphone`='$numberPers',`perspos`='$pos',`ngoname`='$ngoname',`ngophone1`='$numberNGO1',`ngophone2`='$numberNGO2',`ngotype`='$type',`ngodes`='$des',`ngoline1add`='$add1',`ngoline2add`='$add2',`city`='$city',`pincode`='$pin',`state`='$state' WHERE `ngoemail`='$email'";   


    if(mysqli_query($conn, $query))
        echo "successful";
    else
        echo "Error ".$query."<br>".mysqli_error($conn);
} else
    echo "erro";

mysqli_close($conn);
?>