<?php

//class buah
class hewan{
  // menentukan property dengan private
  private $nama = "singa";
  
  // method public
  public function tampilkan_nama(){
      return "Saya Membeli " .$this->nama;
  }
}
//instansiasi class buah
$hewan = new hewan();

// memanggil method public tampilkan_nama dari class buah
echo $hewan->tampilkan_nama();

?>
