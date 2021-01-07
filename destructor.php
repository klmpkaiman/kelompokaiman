<?php
 class hewan{
   
   var $hewan; 
   var $warna; 
 
   function __construct(){
     echo "ini adalah isi method construct </br>";
     }
  
   function __destruct(){
     echo "ini adalah isi method destruct </br>"; 
     
   }
 
   function tampilkan_nama(){
     return " Saya Adalah Buah Anggur </br> "; 
   }
   
   }

   $hewan = new hewan (); 
   echo $hewan->tampilkan_nama();

   ?>
