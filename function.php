<?php
echo "<h2>For String Functions</h2><br>";
echo "<h3> Built-in function</h3>";
echo "<h3>str_split()</h3>";

print_r(str_split("Hi This is a test sample"));

echo "<h3>strcmp()</h3>";
echo strcmp("Hi this is test","Hi this is test");

echo "<h3>strrev()</h3>";
echo strrev("Hi this is test");

echo "<h3>str_word_count()</h3>";
echo str_word_count("Hello this is the new world!");

echo "<h3>strlen()</h3>";
echo strlen("Hello this is the test sample!");


echo "<h3>For Numeric Functions</h3>";

echo "<h3>abs() will provide us the absolute value of the number that is passed as a parameter to the function.</h3>";
echo(abs(5.8) . "<br>");
echo(abs(-5.8) . "<br>");
echo(abs(-2) . "<br>");

echo "<h3>abs() will provide us round values of the parameter</h3>";
echo(round(0.65) . "<br>");
echo(round(0.75) . "<br>");
echo(round(0.30) . "<br>");

echo "<h3>the parameters passed to the function sqrt() fetches the result by calculating the square root of the number</h3>";
echo(sqrt(0) . "<br>");
echo(sqrt(7) . "<br>");
echo(sqrt(2) . "<br>");

echo "<h3>the var_dump() function will check the data type of a particular number passed as a parameter.the output is printed as true or false</h3>";
$x = 456;
var_dump(is_int($x));
echo "<br>";
// Check whether the type of variable is integer or not
$x = 66.58;
var_dump(is_int($x));
echo "<br>";
$x = 11.35;
var_dump(is_float($x));


echo "<h3>For User-defined functions</h3>";

function Writefunction() {
echo "Hello world!";
}
Writefunction();
echo "<br><br>";
function employee($ename) {
echo "$ename baba.<br>";
}
employee("Naqash");
employee("Faheem");
employee("Waqas");

echo "<br><br>";
function Student($ename, $id) {
echo "employee name is $ename. Employee id is $id <br>";
}
Student("Naqash","778456");
Student("Mujahid","567890");

echo "<br><br>";

function addNumbers(int $a, int $b) {
return $a + $b;
}
echo addNumbers(5,10);

 echo "<br><br>";

 echo "<h3>Duplicate values in PHP array</h3>";

 $array = array('apple', 'orange', 'pear', 'banana', 'apple',
'pear', 'kiwi', 'kiwi', 'kiwi');
print_r(array_count_values($array));



echo "<h3>function that concatenates two Arrays</h3>";
function concatenate_array($array1,$array2){
	$combine = array_merge($array1,$array2);
	return $combine;
}
$array1 = [1,2,3,4,5];
$array2 = [3,4,5,6,7];
$result =concatenate_array($array1,$array2);
print_r($result);
echo "<br><br>";
$array1 = array('apple', 'orange', 'pear');
$array2=array( 'banana','kiwi');
$concatenate = array_merge($array1,$array2);
print_r($concatenate);
echo "<br><br>";

echo "<h3>function that find duplicate values</h3>";
function findDuplicate($color1,$color2){
$colors = array_intersect($color1,$color2);
print_r($colors);
}
$color1 = array("a"=>"black","b"=>"gray","c"=>"blue","d"=>"green");
$color2 = array("a"=>"red","b"=>"black","h"=>"gray");
findDuplicate($color1,$color2);
 

echo "<h3> function that returns the largest element in an Array</h3>";
function findlargestelement($array){
    $largevalue = max($array);
	return $largevalue;
}
$array = ['50','80','098','450','890','987'];
$maxvalue = findlargestelement($array);
print_r($maxvalue);



echo "<br><br>";
echo "<h3>Convert String to Array using explode(). Convert comma separated string to array</h3>";
$string = "one,two,three,four";
$arr = explode(",", $string);
print_r($arr);

echo "<br><br>";
echo "<h3> Convert string to an array</h3>";
$string = 'Hello World';
$arr = str_split($string);
print_r($arr);

echo "<br><br>";
echo "<h3>Print duplicate array</h3>";
function array_duplicates($array)
{
    return array_diff_assoc($array, array_unique($array));
}
$array = [3,5,2,5,5,3,3,3,3,9];
$duplicates = array_duplicates($array);
echo "<pre>";
print_r($duplicates);
echo "</pre>";

echo "<h3>Program that prints the next 20 leap years</h3>";
 
function leapyear($year) {
    for($i=$year;$i<2100;$i++){
        if ($i % 4 == 0) {
            echo $i."is leap year<br>";   
         }
    }
}
leapyear(2020);


echo "<br><br>";
echo "<h3>function that checks whether an element exist in a array. </h3>";
function checkelement($array){
   
 if(in_array('PHP', $array)){
    return true;
    }else{
    return false;
 }
}
$array = array("C++","PHP","Java","Android","Dot Net");
$value = checkelement($array);
 print_r($value);
 

?>