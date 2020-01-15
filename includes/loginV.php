<?php

/*
    STEPS WE NEED TO TAKE...

    1.  Build Login HTML form
    2.  Check if form has been submitted
    3.  Validate form data
    4.  Add form data to variables
    5.  Connect to database
    6.  Query the database for username submitted in the form
    6.1     If no entries: show error message
    7.  Store basic user data from database in variables
    8.  Verify stored hashed password with the one submitted in the form
    8.1     If invalid: show error message
    9.  Start a session & create session variables
    10. Redirect to a "profile page"
    10.1    Provide link to "logout" page
    10.2    Add cookie clear to logout page
    10.3    Provide link to log back include
    11. Close the MySQL connection

*/


if(isset( $_POST['usernameV']) ){

    // connect to database
    include('config.php');

    // build a function that validates data
    function validateFormData( $formData ) {
        $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
        return $formData;
    }


    $username = validateFormData( $_POST['usernameV'] );    
    $password= validateFormData( $_POST['passwordV'] );


    $query = "SELECT * FROM volunteers WHERE `email`='$username'";

    $result= mysqli_query($conn,$query);

    if( mysqli_num_rows($result)>0){

        // store basic user data in variables
        while( $row = mysqli_fetch_assoc($result) ) {
            $user       = $row['email'];
            $hashedPass = $row['password'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $phone = $row['phone'];
            $age = $row['age'];
            $dob = $row['dob'];
            $edu = $row['edu'];
            $exp = $row['exp'];
            $bio = $row['des'];

        }

        // verify hashed password with the typed password
        if( password_verify( $password, $hashedPass ) ) {

            // correct login details!
            // start the session
            session_start();

            // store data in SESSION variables
            $_SESSION['email'] = $user;
            $_SESSION['fname'] = $fname;
            $_SESSION['lname'] = $lname;
            $_SESSION['number'] = $phone;
            $_SESSION['age'] = $age;
            $_SESSION['dob'] = $dob;
            $_SESSION['edu'] = $edu;
            $_SESSION['exp'] = $exp;
            $_SESSION['des'] = $bio;
            echo 'valid';

        } else { // hashed password didn't verify

            // error message
            echo "password";
        }

    } else
        echo "userdetails";
    
    // close the mysql connection
    mysqli_close($conn);

}


?>