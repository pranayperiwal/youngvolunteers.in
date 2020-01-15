<?php
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
    $dob= validateFormData( $_POST['dob'] );
    $password= validateFormData( $_POST['password'] );
    $conpassword= validateFormData( $_POST['conpassword'] );
    if($password==$conpassword)
    {
        $passwordhashed= password_hash($password, PASSWORD_DEFAULT );
    } else {
        echo "passworderror";
        exit;
    }



    $emailcheck = "SELECT * FROM volunteers WHERE `email`='$email'";
    $result= mysqli_query($conn,$emailcheck);
    if( mysqli_num_rows($result)>0){
        echo "duplicate";
        exit;
    }

    $query = "INSERT INTO `volunteers`(`id`, `fname`, `lname`, `email`, `password`, `phone`, `dob`, `age`, `edu`, `exp`, `des`) VALUES (NULL, '$fname', '$lname', '$email', '$passwordhashed','$number', '$dob', NULL, NULL, NULL, NULL )";
    

    if(!(mysqli_query($conn, $query)))
        echo "Error ".$query."<br>".mysqli_error($conn);
}

mysqli_close($conn);
?>