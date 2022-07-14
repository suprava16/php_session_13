<?php
function myFun($a,$b){
  echo "welcome";
  echo "sum=",$a+$b;
}
myFun(10,20);

?>

<?php
$arr=[12,40,55.6,"suprava",true]; //indexed array
//echo $arr[3];

// for($i=0;$i<count($arr);$i++){
//   echo $arr[$i]."<br>";
// }

// for each loop

// foreach($arr as $x){
//   echo $x ."<br>";
// }

// associative array
$arr1=[1=>"Ram","B"=>"Hari","C"=>"Riya"];
// echo $arr1["C"];

// foreach
foreach($arr1 as $k=>$y){
echo "$k-$y"."<br>";
}
?>