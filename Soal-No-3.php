
<!-- 
	buatlah program yang dapat menemukan berapa banyak sebuah kata/frasa dari sebuah string baik itu dari kiri atau kanan 
-->


<?php 
public function hitung($kata, $kunci){

$hasil = 0;

For($i=0; $i < strlen($kata); $i++){
  $a = substr($kata,$i,strlen($kunci));
  
  if($i == 0){
    $b = substr($kata, -$i-strlen($kunci));
  }else{
    $b = substr($kata, -$i-strlen($kunci), -$i); 
  }
  If($a == $kunci){
     $hasil += 1; 
  }
  If($b == $kunci){
     $hasil += 1;
  }

}

}


 ?>