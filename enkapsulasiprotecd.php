<?php

//class buah
class buah{
  //menentukan property dengan protected   
  protected $nama = "singa";
  
  //method protected
  protected function nama(){
    return "Saya adalah buah " .$this->nama;
  }
  
  public function tampilkan_nama(){
    return $this->tampilkan_nama;
  }
  
}
 
//instansiasi class buah
$hewan = new hewan();
 
//memanggil method public tampilkan_nama dari class buah
 echo $hewan->tampilkan_nama();
?>
