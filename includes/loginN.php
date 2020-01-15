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


if(isset( $_POST['usernameN']) ){

    // connect to database
    include('config.php');

    // build a function that validates data
    function validateFormData( $formData ) {
        $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
        return $formData;
    }


    $username = validateFormData( $_POST['usernameN'] );    
    $password= validateFormData( $_POST['passwordN'] );


    $query = "SELECT * FROM ngo WHERE `ngoemail`='$username'";

    $result= mysqli_query($conn,$query);

    if( mysqli_num_rows($result)>0){

        // store basic user data in variables
        while( $row = mysqli_fetch_assoc($result) ) {
            $user       = $row['ngoemail'];
            $hashedPass = $row['password'];
            $fname = $row['persfname'];
            $lname = $row['perslname'];
            $pos = $row['perspos'];
            $phone = $row['persphone'];
            $ngophone1 = $row['ngophone1'];
            $ngophone2 = $row['ngophone2'];
            $ngoname = $row['ngoname'];
            $ngotype = $row['ngotype'];
            $ngodes = $row['ngodes'];
            $ngoline1add = $row['ngoline1add'];
            $ngoline2add = $row['ngoline2add'];
            $city = $row['city'];
            $pincode = $row['pincode'];
            $state = $row['state'];

        }

        // verify hashed password with the typed password
        if( password_verify( $password, $hashedPass ) ) {

            // correct login details!
            // start the session
            session_start();

            // store data in SESSION variables
            $_SESSION['ngoemail'] = $user;
            $_SESSION['persfname'] = $fname;
            $_SESSION['perslname'] = $lname;
            $_SESSION['perspos'] = $lname;
            $_SESSION['persphone'] = $phone;
            $_SESSION['ngophone1'] = $ngophone1;
            $_SESSION['ngophone2'] = $ngophone2;
            $_SESSION['ngoname'] = $ngoname;
            $_SESSION['ngotype'] = $ngotype;
            $_SESSION['ngodes'] = $ngodes;
            $_SESSION['ngoline1add'] = $ngoline1add;
            $_SESSION['ngoline2add'] = $ngoline2add;
            $_SESSION['city'] = $city;
            $_SESSION['pincode'] = $pincode;
            $_SESSION['state'] = $state;
            
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