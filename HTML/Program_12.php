<!-- 12.Write a php code to read a text from a file. -->

<?php
$myfile = fopen("php.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("php.txt"));
fclose($myfile);
?>