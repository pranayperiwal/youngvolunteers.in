<?php 
session_start();

include('config.php');
// build a function that validates data
function validateFormData( $formData ) {
    $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
    return $formData;
}


if(isset( $_POST['fname']) ){

    $fname= validateFormData( $_POST['fname'] );
    $lname= validateFormData( $_POST['lname'] );
    $email= validateFormData( $_POST['email'] );
    $number= validateFormData( $_POST['number'] );
    $_SESSION['dob']=$dob= validateFormData( $_POST['dob'] );
    $_SESSION['age']=$age= validateFormData( $_POST['age'] );
    $_SESSION['des']=$des= validateFormData( $_POST['des'] );
    $_SESSION['exp']=$exp= validateFormData( $_POST['exp'] );
    $_SESSION['edu']=$edu= validateFormData( $_POST['edu'] );

    
    
    $query = "UPDATE `volunteers` SET `fname`='$fname',`lname`='$lname',`phone`='$number',`dob`='$dob',`age`='$age',`edu`='$edu',`exp`='$exp',`des`='$des' WHERE `email`='$email'";   
    
    
    if(mysqli_query($conn, $query))
        echo "successful";
    else
        echo "Error ".$query."<br>".mysqli_error($conn);
} else
    echo "erro";

mysqli_close($conn);
?>