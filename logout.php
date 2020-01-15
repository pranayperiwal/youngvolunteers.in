

<?php

// did the user's browser send a cookie for the session?
if( isset( $_COOKIE[ session_name() ] ) ) {

    // empty the cookie
    setcookie( session_name(), '', time()-86400, '/' );

}

// clear all session variables
session_unset();

// destroy the session
session_destroy();

header("Cache-Control", "no-cache, no-store, must-revalidate");
header("Location: index.php");
exit;

?>
