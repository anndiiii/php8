<?php

$grades = array(
    "Math" => "5",
    "English" => "5",
    "Music" => "5",
    "Art" => "5",
);
foreach($grades as $subject =>$grades){
    echo "Subject".$subject.", Grade".$grades;
    echo "<br>";
}



?>