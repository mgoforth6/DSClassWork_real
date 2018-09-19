<?php

echo'<pre>';
echo "foo\n";
// '' single quotes don't interpert what is inside them they just print
echo 'bar\n';

$name = 'Phil';

echo "\n";
echo "My name is {$name}\n";
// (.) is used to concatinate
echo "My name is " . $name . "\n";

class Animal
{
  public $type = 'Pig';
}

$wilbur = new Animal();
echo $wilbur->type;

if (true) {
  //this
} else {
  //That
}

for ($i = 0; $i< 10; $i++) {
  // stuff
}

//all three of the following do the same thing
$id = 0;
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}

// need full thing to make sure php doesn't die
$id = isset($_GET['id']) ? $_GET['id'] : 0;

// if (??) or
$id = $_GET['id'] ?? 0;

//associative arrays
$arr1 = [
  'first' => 'Tom'
  'last' => 'Gregory'
];

echo '[0]:' . $arr[0]; // Won't work
echo '[first]:' . $arr1['first']; //Will work

$arr2 = [ 'one', 'two', 'three'];

$arr2 = [
  0 => 'one',
  1 => 'two',
  3 => 'three'];

foreach($arr2 as $key=>$val) {
  echo $key . ':' .$val;
}
