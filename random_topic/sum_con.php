<?php
$data = file_get_contents('setting.ini');
print_r (explode(",",$data));
$edit = explode(",",$data);
echo '<br>'.$edit[0];
$edit[0] = "pwisetthon_mis";
echo '<br>'.$edit[0].'<br>';
//echo $data;
echo implode(",",$edit).'<br>';
$edse = fopen("setting.ini","w");
echo fwrite($edse,implode(",",$edit));
fclose($edse);
?>