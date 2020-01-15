<?php 

session_start();

include('config.php');
$ngoemail= $_SESSION['ngoemail'];


$query = "SELECT * FROM current_opp WHERE `ngo_email`='$ngoemail'";

$presentOpps= array();

$result= mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0)
{
    $i=0;
    while ($row = mysqli_fetch_assoc($result)){
        if ($row['status']==1){
            
            if($row['duration_s']=='NULL'){
                
                $s='To be discussed with volunteer';
                $e='To be discussed with volunteer';
                
            }else{
                
                $s=$row['duration_s'];
                $e=$row['duration_e'];
                
            }
            
            $presentOpps[$i]= array(
                "title" => $row['title'],
                "numberOfV"=> $row['number_of_v'],
                "description" => $row['des'],
                "startdate" => $s,
                "enddate" => $e,
                "id" => $row['id']
            );
            $i++;  
        }

    }


}


?>
