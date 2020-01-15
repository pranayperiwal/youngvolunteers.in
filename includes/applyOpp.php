<?php 

session_start();

include('config.php');

if(isset( $_POST['id']) ){
    //getting values
    $id= $_POST['id'] ;
    $query_select = "SELECT `ngo_email`, `title` FROM `current_opp` WHERE `id`='$id'";
    $result= mysqli_query($conn,$query_select);
    $row = mysqli_fetch_assoc($result);
    
    //setting values
    $title = $row['title'];
    $ngo_email = $row['ngo_email'];
    $vol_email= $_SESSION['email'] ;
    
    //checking if application already present
    $check = "SELECT `title_work` FROM vol_application WHERE `title_work`='$title'";
    $result= mysqli_query($conn,$check);
    if( mysqli_num_rows($result)>0){
        echo "duplicate";
        exit;
    }
    
    //inserting into table
    $query = "INSERT INTO `vol_application`(`id`, `vol_email`, `title_work`, `ngo_email`, `status`) VALUES (NULL,'$vol_email','$title','$ngo_email', '0')";   

    if(mysqli_query($conn, $query))
        echo "successful";
    else
        echo "Error ".$query."<br>".mysqli_error($conn);
} else
    echo "erro";



?>
