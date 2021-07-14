<?php 
echo "<h3>Arrays in php</h3>";
echo "<h4>There are three types of arrays in php</h4>";
echo "<li>Numerice or Indexed Array</li>";
echo "<li>Associative arrays</li>";
echo "<li>Multidimensional Array</li>";

echo "<p>First discuss about Numerice or indexed array with its functions</p>";

$colors = array('Red','Green','Blue','White','Yellow');
$length = count($colors);
print_r($colors);
echo "<br> Total array length is $length <br>";

echo $colors[0]."<br>";
echo $colors[1]."<br>";
echo $colors[2]."<br>";
echo $colors[3]."<br>";
echo $colors[4]."<br>";

echo "<h3>To Modify the Elements</h3>";
$colors[0] = 'Black';
$colors[1] = 'Maroon';

echo $colors[0]."<br>";
echo $colors[1]."<br>";
print_r($colors);

echo "<h3>In_array() Method.This method performs a search on the array</h3>Syntax is..... in_array(search_value,array_name)";
if(in_array("Blue",$colors)){
    echo "<br>Found Blue is in the array";
}else{
    echo "Did not find Blue in the array";
}

echo "<h3>array_pop() Method.This method removes the last element from the given array.</h3>Syntax is..... array_pop(array_name)<br>";
array_pop($colors);
print_r($colors);

echo "<h3>To array_push() Method.This method adds given elements at the end of the array.</h3>Syntax is......array_push(array_name,value1,value2...)<br>";
array_push($colors,'Neela','peela','Rangeela');
print_r($colors);

echo "<h3>To array_shift() Method.This method removes and returns the first element of the array.</h3>Syntax is......array_shift(array_name)<br>";
echo array_shift($colors);"<br>";
print_r($colors);

echo "<h3>To array_unshift() Method.This method inserts given elements to the beginning of the array.</h3>Syntax is......array_unshift(array_name,Value1,Value2...)<br>";
array_unshift($colors,'Brown','Pink');"<br>";
print_r($colors);

echo "<h3>To array_reverse() Method.This method is used to reverse the elements of the array.</h3>Syntax is......array_reverse(array_name)<br>";
print_r(array_reverse($colors));

echo "<h3>To unset() Method.This method is used to delete the array and elements of the array.</h3>Syntax is......unset(array_name)<br>";
 echo "Array elements are:<br>";
print_r($colors);
unset($colors[1]);
echo "<br>";
echo "Array elements after unset:<br>";
print_r($colors);

echo "<h3>To array_merge(array1,array2).It combined two sigle array into one.</h3>Syntax is......array_merge(array1,array2)<br>";
$colors1 = array('Red','Green','Blue');
$colors2 = array('White','Yellow');
$arraymerge = array_merge($colors1,$colors2);
print_r($arraymerge);

echo "<h3>To array_search(element_value,array).It found the values in array specific elements.</h3>";
$colors1 = array('Red','Green','Blue');

$search = array_search('Blue',$colors1);
echo "Search found on array position:" .$search;

?>