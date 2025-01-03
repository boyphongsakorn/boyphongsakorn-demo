<?php
$mysqli = new mysqli("localhost","pwisetthon_mis","Team1556th","pwisetthon_mis");

// Check connection
if ($mysqli -> connect_errno) {
echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
exit();
}

$com_sa = "SELECT * FROM topic";
$com_sa_re = $mysqli -> query($com_sa);

$com_co = "SELECT * FROM topic WHERE bywho = ''";
$com_co_re = $mysqli -> query($com_co);

$com_rt = "SELECT * FROM topic WHERE bywho = '' ORDER BY RAND() LIMIT 1;";
$com_rt_re = $mysqli -> query($com_rt);
?>