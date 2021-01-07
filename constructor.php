<?php
   //class hewan
class hewan{
      //property
      var $jeniskelamin;
      var $warna;
      
      function __construct(){
        echo "ini adalah isi method construct <br/>";
      
}


  //method hewan 
  function tampilkan_nama(){
    return "nama saya angga_coding <br/>";
    
  }

}
//instansiasi class hewan
$hewan = new hewan();

//memanggil method tampilkan nama dari class hewan
echo $hewan->tampilkan_nama();
