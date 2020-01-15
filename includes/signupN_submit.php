<?php
include('config.php');
// build a function that validates data
function validateFormData( $formData ) {
    $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
    return $formData;
}


if(isset( $_POST['ngo_name']) ){

    $ngoname= validateFormData( $_POST['ngo_name'] );
    $fname= validateFormData( $_POST['fname'] );
    $lname= validateFormData( $_POST['lname'] );
    $email= validateFormData( $_POST['email'] );
    $numberPers= validateFormData( $_POST['num_pers'] );
    $numberNGO= validateFormData( $_POST['num_ngo'] );
    $password= validateFormData( $_POST['password'] );
    $conpassword= validateFormData( $_POST['conpassword'] );
   
    if($password==$conpassword)
    {
        $passwordhashed= password_hash($password, PASSWORD_DEFAULT );
    } else {
        echo "passworderror";
        exit;
    }



    $emailcheck = "SELECT * FROM ngo WHERE `ngoemail`='$email'";
    $result= mysqli_query($conn,$emailcheck);
    if( mysqli_num_rows($result)>0){
        echo "duplicate";
        exit;
    }
    
    $query= "INSERT INTO `ngo`(`id`, `persfname`, `perslname`, `persphone`, `perspos`, `ngoname`, `ngoemail`, `password`, `ngophone1`, `ngophone2`, `ngotype`, `ngodes`, `ngoline1add`, `ngoline2add`, `city`, `pincode`, `state`) VALUES (NULL,'$fname','$lname','$numberPers',NULL,'$ngoname','$email','$passwordhashed','$numberNGO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL )";


    if(!(mysqli_query($conn, $query)))
        echo "Error ".$query."<br>".mysqli_error($conn);
}

mysqli_close($conn);
?>