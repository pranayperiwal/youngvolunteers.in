

<?php 

session_start();

include('config.php');
$vol_email= $_SESSION['email'];


$query = "SELECT * FROM `vol_application` WHERE `vol_email`='$vol_email'";

//get the title for all the works
$result= mysqli_query($conn,$query);
$title=array();
if(mysqli_num_rows($result)>0)
{
    $i=0;
    while ($row = mysqli_fetch_assoc($result)){
        $title[$i]=$row['title_work'];
        $i++;  

    }

}



//get the email for all ngo 
$result= mysqli_query($conn,$query);
$ngoemail = array();
if(mysqli_num_rows($result)>0)
{
    $i=0;
    while ($row = mysqli_fetch_assoc($result)){
        $ngoemail[$i]=$row['ngo_email'];
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



//get the names for all the ngos 
$ngoname = array();
$ngonum = array();
$ngonum2 = array();
$ngoline1 = array();
$ngoline2 = array();
$city = array();
$pincode = array();
$state = array();
$length = sizeof($title);
$i=0;
while($length>0){
    $length--;    
    $query_ngo_dets = "SELECT `ngoname`, `ngophone1`,`ngophone2`,`ngoline1add`,`ngoline2add`,`city`,`pincode`,`state`  FROM `ngo` WHERE `ngoemail`='$ngoemail[$i]'";
    $result_ngo_dets= mysqli_query($conn,$query_ngo_dets);
    $row_ngo_dets = mysqli_fetch_assoc($result_ngo_dets);
    $ngoname[$i]=$row_ngo_dets['ngoname'];
    $ngonum[$i]=$row_ngo_dets['ngophone1'];
    $ngonum2[$i]=$row_ngo_dets['ngophone2'];
    $ngoline1[$i]=$row_ngo_dets['ngoline1add'];
    $ngoline2[$i]=$row_ngo_dets['ngoline2add'];
    $city[$i]=$row_ngo_dets['city'];
    $pincode[$i]=$row_ngo_dets['pincode'];
    $state[$i]=$row_ngo_dets['state'];
    $i++;  

}

//get the description for all the works 
$description = array();
$extra = array();
$start = array();
$end = array();
$length = sizeof($title);
$i=0;
while($length>0){
    $length--;    
    $query_info = "SELECT `des`, `extra`, `duration_s`, `duration_e` FROM `current_opp` WHERE `title`='$title[$i]'";
    $result_info= mysqli_query($conn,$query_info);
    $row_info = mysqli_fetch_assoc($result_info);
    $description[$i]=$row_info['des'];
    $extra[$i]=$row_info['extra'];
    $start[$i]=$row_info['duration_s'];
    $end[$i]=$row_info['duration_e'];
    $i++;  
}


$status_text = array();
$start_text = array();
$end_text = array();
$engagements= array();
$i=0;
$length = sizeof($title);
while ($length>0){

    if($status[$i]==0){
        $status_text[$i]="Not confirmed";
    }
    else {
        $status_text[$i]="Confirmed";
    }
    
    if($start[$i]=='NULL'){
        $start_text[$i]="Contact NGO to decide";
        $end_text[$i]="Contact NGO to decide";
    }
    else {
        $start_text[$i]=$start[$i];
        $end_text[$i]=$end[$i];
    }
 
    
    
    $length--;
    $engagements[$i]= array(
        "name" => $ngoname[$i],
        "title" => $title[$i],
        "description" => $description[$i],
        "extra" => $extra[$i],
        "start" => $start_text[$i],
        "end" => $end_text[$i],
        "status" => $status_text[$i],            
        "ngoemail" => $ngoemail[$i],            
        "ngonum" => $ngonum[$i],            
        "ngonum2" => $ngonum2[$i],            
        "line1" => $ngoline1[$i],            
        "line2" => $ngoline2[$i],            
        "city" => $city[$i],            
        "pincode" => $pincode[$i],            
        "state" => $state[$i],            
        "id" => $row['id'],
        "img-ngo" => ""
    );
    $i++;  
}


?>
