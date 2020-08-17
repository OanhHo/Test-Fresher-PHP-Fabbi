<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
<?php
function dao_chuoi($a){
    $string_input=(string)(abs($a));
    $i = 0;
    $temp = $string_output = "";
    while ($char = @$string_input[$i++])
    {
        $temp .= $char;
    }
    $int_output=(integer)$temp.$string_input;
    if ($int_output>2147483647){
        $int_output=0;
    }
    if($a<0){
        $int_output=-$int_output;
    }
}

?>
</body>
</html>