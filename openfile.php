<?php 
$files = "oke.txt";


if (file_exists($files)) {
	echo "file $files ditemukan";
    $file = fopen("oke.txt",'w');
    for ($i=1; $i <=10 ; $i++) { 
	 fwrite($file,$i. "write \r\n");

}
fwrite($file, '');
}

else{
	echo"file gk di temukan";
	fopen($files, 'w');
}
?>