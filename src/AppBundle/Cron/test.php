<?php
$currentYear = new DateTime();
$currentYear = $currentYear->format("m");
$result = 12/$currentYear;
echo $result;
?>