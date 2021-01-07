<?php
 //class buah 
 class hewan{
   //property
   public  $nama; 
   public  $warna; 
   
   //method buah 
   function tampilkan_hewan(){
     return "singa berwarna merah </br>"; 
   }
 }
 //instansiasi class buah 
 $hewan = new hewan(); 
 
 //memanggil method tampilkan_buah dari class buah
 echo  $hewan->tampilkan_hewan();
 ?>
