<?php
   //php oop part 2 pengertian class,object,property dan method
   // class hewan
   class hewan {
     //property
     var $jeniskelamin;
     var $warna;
     //method hewan
     function tampilkan_jeniskelamin(){
       return "saya singa jantan_coding <br/>";
     }
   
     function warna_kulit(){
       return "warna kulit saya coklak
        <br/)";
     }
   }
   // instansiasi class hewan
   $hewan = new hewan();
   
   //memanggil method tampilkan_jeniskelamin dari hewan
   echo $hewan->tampilkan_jeniskelamin();
    
    //memanggil method warna_kulit dari class hewan
    echo $hewan->warna_kulit();
