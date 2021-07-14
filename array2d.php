<?php 
echo "<h4>The Associative Array:The elements of this array are stored in the form of a key-value pair.</h4><br>";

echo "Syntax is..... array('key1'=>'value1','key2'=>'value2'.....)<br>";

$input = array (
array ("Red", "Green", "Blue"),
array ("Yellow", "Orange", "Purple"),
);

print_r($input);
echo "<br>";
echo $input[1][0];
echo "<br>";
echo $input[0][2];
echo "<br>";
echo $input[1][2];
 
$data = array (
"colors"=>array ("Red", "Green", "Blue"),
"fruits"=>array ("Apple", "Orange", "Grapes"),
"cars"=>array ("Skoda", "BMW", "Mercedes")
);

$data['cars']['1']="Mehran";
echo "<pre>";
print_r($data);
echo "<pre>";

echo "<pre>";
print_r($data);
echo "<pre>";

echo "<h2>push the array data</h2>";

array_push($data['colors'],'White');
echo "<pre>";
print_r($data);
echo "<pre>";

echo "<h2>Update the array data</h2>";

$data['cars'][2]='ferarri';
echo "<pre>";
print_r($data);
echo "<pre>";

echo "<h2>Delete an element of 2D</h2>";
print_r(array_shift($data));

unset($data['fruits']);
print_r($data);

echo "<h2>PHP array_diff_assoc()</h2>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");
$result=array_diff_assoc($a1,$a2);
print_r($result);

echo "<h2>array_diff_key() )</h2>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");
$result=array_diff_key($a1,$a2);
print_r($result);

echo "<h2>array()</h2>";

$array = array (
		'websites' => array (
				'Search' => 'Google',
				'Social' => 'Facebook',
				'News' => 'NY Times' 
		),
		'friends' => array (
				'Chris',
				'Jim',
				'Lynn',
				'Jeff',
				'Joanna' 
		) 
);

print_r($array);

echo "<h2>is_array()</h2>";
echo is_array($array);

echo "<h2>in_array()</h2>";
echo in_array('Google',$array['websites']);

echo "<h2>is_merge()</h2>";
$merge = array_merge($array['websites'],	$array['friends']);
 print_r($merge);

 echo "<h2>array_keys()</h2>";
 $key = array_keys($merge);
 print_r($key);

 echo "<h2> array_key_exists()</h2>";

 $exists = array_key_exists('7', $key);
  print_r($exists);
  echo "<br>";
  echo $key['7'];

 
?>