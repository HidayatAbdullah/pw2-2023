<?php

   require_once('class_kasus.php');
   
   $kampus_a = new KampusA("ITB", "Bandung", 12);
   $kampus_b = new KampusB("UNJ", "Jakarta", 3500);
   
   
   echo "Informasi Kampus A<hr>";
   "<hr>";
   $kampus_a->getInfoKampusA();
   echo"<br>";
   
   echo "Informasi Kampus B<hr>  ";
   $kampus_b->getInfoKampusB();   

?>
