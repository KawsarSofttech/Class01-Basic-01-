<?php

echo "Hello CTG-323 <br>";
$name = "Kawsar";
echo "Welcome ".$name." DollarMan <br>";


$invoice = 100;
var_dump($invoice);
echo "Bill: ".$invoice;

$invoice = 100.50;
var_dump($invoice);

$invoice = '';
var_dump($invoice);

$invoice;
var_dump($invoice);

$arr = array("Jadu", "Modhu", "Kodhu");
echo $arr[1]." ".$arr[2];
echo "<br>";

$arr = array(
	array("Jasim","Sohel rana","Razzak"),
	array("Shabana","Rozina","Bobita"),
	array("Jamboo","Dipzol","Misha"),
);
echo $arr[2][2]." ".$arr[2][1]." ".$arr[2][0];

$arr = array(
	"id" => "1982-1997-2010",
	"Name" => "Md. Abu Kawsar",
	"Status" => "Running",
);

echo $arr["id"]." "."Name:".$arr["Name"];

$arr = "Md. Abu Kawsar";

echo strlen($arr);
echo "<br>";

$a = "Kawsar";
echo md5($a);
echo sha1($a);
echo "<br>";

$arr = "We are Batch CTG-323";
print_r(explode(" ", $arr));
echo "<br>";

$arr = "We are Batch CTG-323";
$data = (explode(" ", $arr));
echo $data[2];
echo "<br>";
$arr = array("I","am","a","Coder");
$data = implode(" ", $arr);
echo $data;
echo "<br>";
$about = "I,am,a,Coder";
$data1 = explode(",", $about);
$data2 = implode(" ", $data1);
echo $data2;
echo "<br>";
$i = 11;
$j = $i%5;
echo $j;
echo "<br>";
$i = 2;
$j = 2**3;
echo $j;

$a = 1;
$a++;
echo $a;
$i = "Bobita";
echo gettype($i);
echo "<br>";
print_r($_SERVER);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "Md. Abu Kawsar"; ?></h1>
</body>
</html>





