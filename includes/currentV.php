<?php 

session_start();

include('config.php');
$ngo_email= $_SESSION['ngoemail'];


$query = "SELECT * FROM `vol_application` WHERE `ngo_email`='$ngo_email'";  

//get the title for all the works
$result= mysqli_query($conn,$query);
$title=array();
$id = array();
if(mysqli_num_rows($result)>0)
{
    $i=0;
    while ($row = mysqli_fetch_assoc($result)){
        $title[$i]=$row['title_work'];
        $id[$i]=$row['id'];
        $i++;  

    }

}



//get the email for all volunteers 
$result= mysqli_query($conn,$query);
$volemail = array();
if(mysqli_num_rows($result)>0)
{
    $i=0;
    while ($row = mysqli_fetch_assoc($result)){
        $volemail[$i]=$row['vol_email'];
        $i++;  

    }

}


//get the status for all work 
$result= mysqli_query($conn,$query);
$status = array();
if(mysqli_num_rows($result)>0)
{
    $i=0;
    while ($row = mysqli_fetch_assoc($result)){
        $status[$i]=$row['status'];
        $i++;  

    }

}



//storing details of the volunteer in parallel arrays
$length = sizeof($title);
$i=0;
$des = array();
$fname = array();
$lname = array();
$phone = array();
while($length>0){
    $length--;    
    $query_vol_dets = "SELECT `fname`,`lname`,`des`, `phone` FROM `volunteers` WHERE `email`='$volemail[$i]'";
    $result_vol_dets= mysqli_query($conn,$query_vol_dets);
    $row_vol_dets = mysqli_fetch_assoc($result_vol_dets);
    $fname[$i]=$row_vol_dets['fname'];
    $lname[$i]=$row_vol_dets['lname'];
    $des[$i]=$row_vol_dets['des'];
    $phone[$i]=$row_vol_dets['phone'];
    $i++;  

}

//setting start and end day of the work
$i=0;
$start= array();
$end= array();
$length = sizeof($title);
while($length>0){
    $length--;    
    $query_date = "SELECT `duration_s`,`duration_e` FROM `current_opp` WHERE `title`='$title[$i]'";
    $result_date= mysqli_query($conn,$query_date);
    $row_date = mysqli_fetch_assoc($result_date);
    $start[$i]=$row_date['duration_s'];
    $end[$i]=$row_date['duration_e'];   
    $i++;  

}


//getting the length for the loop
$length = 0;
for($i=0;$i<sizeof($status);$i++){
    if($status[$i]==1)
        $length++;
}

//creating the array
$currentVs= array();
$s= array();
$e = array();
$i=0;
while ($length>0){

    if($status[$i]==1){

        if($start[$i]=='NULL'){

            $s[$i]='To be discussed';
            $e[$i]='To be discussed';

        }else{

            $s[$i]=$start[$i];
            $e[$i]=$end[$i];

        }

        $currentVs[$i]= array(
            "fname" => $fname[$i],
            "lname" => $lname[$i],
            "title" => $title[$i],
            "description" => $des[$i],
            "number" => $phone[$i],            
            "email" => $volemail[$i],            
            "start" => $s[$i],            
            "end" => $e[$i],            
            "id" => $id[$i],
            "img-vol" => ""
        );

        $length--;
    }

    $i++; 
}


?>
