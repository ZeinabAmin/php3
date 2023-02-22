<?php
declare(strict_types=1); //true

//type hinting
function hello(string $name4): void  //mixed //bool //array //void
{
    echo "hello ya $name4 <br>";
}
hello('hamdy');
echo "<br>";
////////////////////////////////////////
function greet(): void
{
    echo "hello ya Ali";
}
greet();
echo "<br>";
////////////////////////////////////////
function add(int|float $x, int|float $y): int|float
{
    return $x + $y;
}
echo add(4, 5.8);
echo "<br>";
////////////////////////////////////////
function calc(int|float $x, int|float $y, string $op): int|float|string
{
    switch ($op) {
        case 'add':
            return $x + $y;
        case 'sub':
            return $x - $y;
        case 'mul':
            return $x * $y;
        case 'div':
            return $x / $y;
        default:
            return "operation not valid";
    }
}
echo calc(3, 5, 'add');
echo "<br>";
////////////////////////////////////////

//var scope
$f = 3;
function test()
{
    global $f;
    echo $f;
    global $n;
    $n = 4;
}
test();
echo "<br>";
echo $n;
echo "<br>";
////////////////////////////////////////

//calling by value
//passing by value
$z = 5;
function test2(int $z)
{
    echo $z += 10;
}
test2($z); //15
echo "<br>";
echo $z; //5
echo "<br>";
//calling by reference
//passing by reference

function test3(int &$z)
{
    echo  $z += 10;
}
test3($z); //15
echo "<br>";
echo $z; //15
echo "<br>";
////////////////////////////////////////
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
//$arr=range(1,100);
$arrcount = count($arr);
$shuffleNo = $arrcount * 1;
for ($i = 1; $i <= $shuffleNo; $i++) {
    $randomIndex1 = rand(0, $arrcount - 1);
    $randomIndex2 = rand(0, $arrcount - 1);

    if ($randomIndex1 != $randomIndex2) {

        $temp = $arr[$randomIndex1];
        $arr[$randomIndex1] = $arr[$randomIndex2];
        $arr[$randomIndex2] = $temp;
    }
    //     echo "<pre>";
    //     print_r($randomIndex1);
    //     print_r($randomIndex2);
    //     print_r($arr);
    //     echo '</pre>';

}
echo "<pre>";
print_r($arr);
echo '</pre>';
echo "<br>";
////////////////////////////////////////
$arr = range(1, 100);
function shuffleArray(array $arr): array
{

    $arrcount = count($arr);
    $shuffleNo = $arrcount * 1;

    for ($i = 1; $i <= $shuffleNo; $i++) {
        $randomIndex1 = rand(0, $arrcount - 1);
        $randomIndex2 = rand(0, $arrcount - 1);

        if ($randomIndex1 != $randomIndex2) {

            swap($arr[$randomIndex1], $arr[$randomIndex2]);
        }
    }

    return $arr;
}

//function swap(mixed &$var1, mixed &$var2){
function swap(&$var1, &$var2)
{
    $temp = $var1;
    $var1 = $var2;
    $var2 = $temp;
}
$x = 3;
$y = 4;

swap($x, $y);
echo $x, $y;

$shuffleNums = shuffleArray($arr);
echo "<pre>";
print_r($shuffleNums);
echo '</pre>';
echo "<br>";
////////////////////////////////////////

//range(low,high,step); //step optional default 1

$number = range(0, 5);
print_r($number);
