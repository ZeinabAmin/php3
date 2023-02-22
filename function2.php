<?php
$names=['ali','mai','omar'];
$flag=0;
foreach ($names as $value) {
   if ($value =='ali') {
   $flag++;
   }
}
echo $flag;
echo "<br>";
////////////////////////////////////////
$arr=['ali','mai','omar'];
function checkName(array $arr,string $name):int
{
    $flag=0;
    foreach ($arr as $value) {
       if ($value ==$name) {
       $flag++;
       } 
}
return $flag;
}
echo checkName($arr,'ali');//1
echo "<br>";
////////////////////////////////////////
function disc (int $price){
    if ($price > 1000) {
$price= $price - ($price * 20/100);
    }else {
        $price= $price - ($price * 5/100);
    }
   
    return $price;
}
echo disc(1000);//950
echo "<br>";
////////////////////////////////////////
function fetchnumber($z)
{
    foreach ($z as $x => $v) {
        echo $v. '<br>';
    }
}
$num2=[1,33,65,88,888];
fetchnumber($num2);
// or fetchnumber([1,33,65,88,888]);
echo "<br>";
////////////////////////////////////////
function number($n)
{
    echo $n;
}
echo 10 + number(10); //1010
echo "<br>";
////////////////////////////////////////
function number2($n)
{
    return $n;
}
echo 10 + number2(10); //20
echo "<br>";
////////////////////////////////////////
function number3($n)
{
    echo $n;
    return $n;
}
number3(10); //10 echo
echo "<br>";
////////////////////////////////////////
// $b=number(10);
// echo $b;//10
//echo "<br>";
////////////////////////////////////////

//print();//built in func
echo "<br>";
////////////////////////////////////////

//default value of parameter
//optional para

function plus(int $x=5,int $y=2)
{
    return $x + $y;
}
echo plus();//7
echo "<br>";
echo plus(20);//20 for x , y default //22
echo "<br>";
////////////////////////////////////////

//anonymous function
$name=function(){
    echo 'Ali';
};

$name();
echo "<br>";
$x=$name;
echo $x(); //Ali
echo "<br>";
////////////////////////////////////////
function loop($x) // call func $x
{
echo $x();
}
loop($x);//Ali
?>