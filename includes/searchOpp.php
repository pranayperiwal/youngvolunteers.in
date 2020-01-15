<?php 

session_start();

include('config.php');



$query = "SELECT * FROM `current_opp` WHERE `status`='1'";
$result= mysqli_query($conn,$query);



$email=array();
//get the emails of the ngos
if(mysqli_num_rows($result)>0)
{
    $i=0;
    while ($row = mysqli_fetch_assoc($result)){
        $email[$i]=$row['ngo_email'];
        $i++;  

    }

}


$opportunities= array();
$names= array();
$type= array();
//get the names of ngos
if(sizeof($email)>0)
{
    $i=0;
    $emailsize = sizeof($email);
    while ($emailsize>0){
        $emailsize--;
        $query_name= "SELECT `ngoname`, `ngotype` FROM `ngo` WHERE `ngoemail`='$email[$i]'";
        $result_name= mysqli_query($conn,$query_name);
        $row = mysqli_fetch_assoc($result_name);
        $names[$i]=$row['ngoname'];
        $type[$i]=$row['ngotype'];
        $i++;  
    }

}



$result= mysqli_query($conn,$query);
//$row = mysqli_fetch_assoc($result);

if(mysqli_num_rows($result)>=0)
{
    $i=0;
    $emailsize = sizeof($email);
    while ($row = mysqli_fetch_assoc($result)){
        //$emailsize--;
        if ($row['status']==1){
            
            if($row['duration_s']=='NULL'){

                $s='To be discussed with volunteer';
                $e='To be discussed with volunteer';

            }else{

                $s=$row['duration_s'];
                $e=$row['duration_e'];

            }

            $opportunities[$i]= array(
                "title" => $row['title'],
                "numberOfV"=> $row['number_of_v'],
                "description" => $row['des'],
                "startdate" => $s,
                "enddate" => $e,                
                "id" => $row['id'],
                "weeks" => $row['weeks'],
                "extra" => $row['extra'],
                "name" => $names[$i],
                "type" => $type[$i],
                "img-ngo" => 'src="https://picsum.photos/200/200/?random"'
            );
            $i++;  
        }
    }
}

?>
