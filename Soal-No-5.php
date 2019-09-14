<!-- 
	buatlah function yang mempunyai sebuah parametr, fungsi tersebut mempunyai tugas untuk mencatak string acak sepanjang 32 karakter sebanyak jumlah parameter \
-->

<?php 

function cetak ($jml) {
for ($i =0; $i <$jml; ++$i){
	$length = random_bytes(16);
	echo "".bin2hex($length)."\n";
 }
}
cetak(3);
?>