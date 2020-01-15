

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




$length = sizeof($title);
$i=0;
$des = array();
$exp = array();
$fname = array();
$lname = array();
$age = array();
$edu = array();
$phone = array();
while($length>0){
    $length--;    
    $query_vol_dets = "SELECT `fname`,`lname`,`age`,`des`, `exp`, `edu`, `phone`, `id` FROM `volunteers` WHERE `email`='$volemail[$i]'";
    $result_vol_dets= mysqli_query($conn,$query_vol_dets);
    $row_vol_dets = mysqli_fetch_assoc($result_vol_dets);
    $fname[$i]=$row_vol_dets['fname'];
    $lname[$i]=$row_vol_dets['lname'];
    $age[$i]=$row_vol_dets['age'];
    $des[$i]=$row_vol_dets['des'];
    $exp[$i]=$row_vol_dets['exp'];
    $edu[$i]=$row_vol_dets['edu'];
    $phone[$i]=$row_vol_dets['phone'];
    $i++;  

}



$currentReqs= array();
$length = 0;

for($i=0;$i<sizeof($status);$i++){
    if($status[$i]==0)
        $length++;
}


$i=0;
while ($length>0){
    if($status[$i]==0){
        
        $length--;
        $currentReqs[$i]= array(
            "fname" => $fname[$i],
            "lname" => $lname[$i],
            "title" => $title[$i],
            "description" => $des[$i],
            "edu" => $edu[$i],
            "age" => $age[$i],
            "exp" => $exp[$i],            
            "number" => $phone[$i],            
            "email" => $volemail[$i],            
            "id" => $id[$i],            
            "imgV" => ""            
         
        );
        

    }
$i++; 
}


?>
