<?php
include "sentence.php";
header("Content-Type: application/json");
echo json_encode(array("sentence"=>"The ".$sentence, "permalink"=>"/?".$permalink, "agency"=>$agency));

?>