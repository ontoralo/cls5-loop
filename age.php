<?php
function age($yourAge){

if($yourAge<=10){
echo "You are Child";
}
elseif($yourAge>10 && $yourAge<=20){
echo "You are Teenager";
}
elseif($yourAge>20 && $yourAge<=30){
echo "You are Young";
}
elseif($yourAge>30 && $yourAge<=50){
echo "You are Middle Aged";
}
elseif($yourAge>50){
echo "You are Old";
}
else{
echo "Sorry Invalid Input";
}
}
age(2);

?>