<?php

$marks = 51;


if($marks>=33 && $marks<=40 ){
echo "Congratulations you are passed with grate 'D' and GPA '1'";
}elseif ($marks>=40 && $marks<=50){
echo "Congratulations you are passed with grate 'C' and GPA '2'";
}elseif ($marks>=50 && $marks<=60){
echo "Congratulations you are passed with grate 'B' and GPA '3'";
}elseif ($marks>=60 && $marks<=70){
echo "Congratulations you are passed with grate 'A-' and GPA '3.5'";
}elseif ($marks>=70 && $marks<=79){
echo "Congratulations you are passed with grate 'A' and GPA '4'";
}elseif ($marks>=80){
echo "Congratulations you are passed with grate 'A+' and GPA '5'";
}else{
echo "Sorry for this time please try hard for next..";
}




?>
