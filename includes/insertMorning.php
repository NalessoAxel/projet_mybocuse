<?php
    //$id=$_GET['idStudent'];
    require_once('conn.php');
    
    $req='select * from attendance';
   
    $dateCourante=date('Y-m-d');
    //$ps=$bdd->prepare("insert into attendance(attendence_morning,arriving_time,arriving_status,attendence_departure,departure_time,departure_status,idStudent) values ('present',null,null,'present','$dateCourante','validate',7)");
    //$ps=$bdd->prepare("UPDATE attendance SET departure_time ='$dateCourante',arriving_status='validate' where idStudent=7");
    $ps=$bdd->prepare("insert into attendance(attendence_morning,arriving_time,arriving_status,attendence_departure,departure_time,departure_status,idStudent) values ('present',?,null,'present','$dateCourante','validate',?)");
    //$apprenant=$ps->fetch();
   /*
    $req='select * from attendance where idStudent=7';
    if($apprenant['arriving_status']=='validate')
    {
     $ps=$bdd->prepare("UPDATE attendance SET attendence='present une demi journée'  where idStudent=7");
    }
    else
    {
     $ps=$bdd->prepare("UPDATE attendance SET attendence='absent'  where idStudent=7");
    }
  
  
/*
    echo  'ok';   // header('location:attendance.php');
   while($apprenant=$ps->fetch()){
   $apprenant=$ps->fetch();
   echo $apprenant['attendence'];}
     */
    echo '<p> Présence matinale validée!</p>';
   $ps->execute();

?>


                    