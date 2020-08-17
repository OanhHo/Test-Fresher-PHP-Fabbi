<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
<?php
$arrayA=array();
?>
?>
<?php
$arrayB=$arrayA;
$size_mang=sizeof($arrayA);
$n=$size_mang/3;
$arrayX=array();
$arrayY=array();
$arrayZ=array();
$array_output=array();
for($i=0;$i<$size_mang;$i++){
if($i<$n){
    $arrayX[$i]=$arrayB[$i];
}
if( $i>=$n &&$i<2*$n){
    $arrayY[$i-$n]=$arrayB[$i];
}
if($i>=2*$n && $i<$size_mang){
    $arrayZ[$i-2*$n]=$arrayB[$i];

}
}
if($n<=1){
    $array_output[0]=$arrayX[0];
    $array_output[1]=$arrayY[0];
    $array_output[2]=$arrayZ[0];

}
else{
    $j=1;
    for($i=1;$i<$n;$i++){
        $array_output[$j]=$arrayX[$i];
        $array_output[$j+1]=$arrayY[$i];
        $array_output[$j+2]=$arrayZ[$i];
        $j*3;
    }
}
?>
</body>
</html>