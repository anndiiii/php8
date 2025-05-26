<?php
$myfile = "ds_txt";
$myfilename =fopen($myfile, "i");
$size = filesize($myfile);
$myfile_data= fread($myfilename, $size);


echo $myfile_data;
?>