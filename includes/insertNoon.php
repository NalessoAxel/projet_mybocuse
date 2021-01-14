<?php
    //$id=$_GET['idStudent'];
    require_once('conn.php');
    
    //$req='select * from attendance';
    $dateCourante=date('Y-m-d');
    $req='select * from attendance';
    $apprenant=$ps->fetch();
    if($apprenant['attendence_morning']==null)
    {
        $dateCourante=date('Y-m-d');
        $ps=$bdd->prepare("insert into attendance(attendence_morning,arriving_time,arriving_status,attendence_departure,departure_time,departure_status,idStudent) values ('present',null,null,'present','$dateCourante','validate',7)");

    }
    else
    {
        $ps=$bdd->prepare("UPDATE attendance SET departure_status='validate', departure_time ='$dateCourante' where idStudent=?");
    }

    
    
    
    //$params=array($attendence,$arriving_time,$departure_time,$idStudent);

    //echo 'ok';
   // header('location:attendance.php');
 

   $req='select * from attendance';


   echo '<p> Présence matinale validée!</p>';

   $ps->execute();



?>