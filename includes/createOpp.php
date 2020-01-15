<?php 
session_start();

include('config.php');
// build a function that validates data
function validateFormData( $formData ) {
    $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
    return $formData;
}


if(isset( $_POST['title']) ){

    $title= validateFormData( $_POST['title'] );
    $noV= validateFormData( $_POST['number_of_v'] );
    $start= validateFormData( $_POST['duration_s'] );
    $end= validateFormData( $_POST['duration_e'] );
    $des= validateFormData( $_POST['des'] );
    $dets= validateFormData( $_POST['extra'] );
    $weeks= validateFormData( $_POST['weeks'] );
   
    $titlecheck = "SELECT `title` FROM current_opp WHERE `title`='$title'";
    $result= mysqli_query($conn,$titlecheck);
    if( mysqli_num_rows($result)>0){
        echo "duplicate";
        exit;
    }
    
    $query = "INSERT INTO `current_opp`(`id`, `ngo_email`, `title`, `number_of_v`, `duration_s`, `duration_e`, `weeks`, `des`, `extra`, `status`) VALUES (NULL,'$_SESSION[ngoemail]','$title','$noV','$start','$end','$weeks','$des','$dets','1')";   
    
    
    if(mysqli_query($conn, $query))
        echo "successful";
    else
        echo "Error ".$query."<br>".mysqli_error($conn);
} else
    echo "erro";

mysqli_close($conn);
?>