<?php 

session_start();

include('config.php');

if(isset( $_POST['id']) ){

    $status= $_POST['status'] ;
    $id= $_POST['id'] ;
    $query = "UPDATE `vol_application` SET `status`='$status' WHERE `id`='$id'";   

    if(mysqli_query($conn, $query))
        echo "successful";
    else
        echo "Error ".$query."<br>".mysqli_error($conn);
} else
    echo "erro";

//

?>
