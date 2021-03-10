<?php
function caseType($text, $case){
if($case=="UPPERCASE"){
echo "<span style=\"text-transform: uppercase;\">$text</span>";
}
if($case=="lowercase"){
echo "<span style=\"text-transform: lowercase;\">$text</span>";
}
if($case=="capitalize"){
echo "<span style=\"text-transform: capitalize;\">$text</span>";
}
}
caseType('This is Text', 'capitalize');

?>
