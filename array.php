<?php

//numeric array
echo "Numeric Array : <br/><br/>";

$numeric_array = array(1,2,3,4,5,6,7,8,9,0);

foreach($numeric_array as $num)
{
    echo "$num <br/>";
}

echo "<br/> By Index value Array : <br/><br/>";
$numeric_array[0] = "One";
$numeric_array[1] = "Two";
$numeric_array[2] = "Three";
$numeric_array[3] = "Four";
$numeric_array[4] = "Five";
$numeric_array[5] = "Six";
$numeric_array[6] = "Seven";
$numeric_array[7] = "Eight";
$numeric_array[8] = "Nine";
$numeric_array[9] = "Zero";

foreach($numeric_array as $num)
{
  echo "$num <br/>";
}

//associative array
echo "<br/>Associative array : <br/>";
$associative_array = array(0 => "Zero", 1 => "One", 2 => "Two", 3 => "Three", 4 => "Four", 5 => "Five", 6 => "Six", 7 => "Seven", 8 => "Eight", 9 => "Nine");

foreach($associative_array as $aa)
{
  echo "$aa <br/>";
}

echo "<br/>Associative array by index key array :<br/><br/>";

$associative_array["Zero"] = 0;
$associative_array["One"] = 1;
$associative_array["Two"] = 2;
$associative_array["Three"] = 3;
$associative_array["Four"] = 4;
$associative_array["Five"] = 5;
$associative_array["Six"] = 6;
$associative_array["Seven"] = 7;
$associative_array["Eight"] = 8;
$associative_array["Nine"] = 9;

foreach($associative_array as $aa)
{
  echo var_dump($aa)."<br/><br/>";
}

//multidimensional array

$employees = array  
  (  
  array("BALAJI","N",400000),  
  array("PRASANTH","K",500000),  
  array("HARI","K",300000)  
  );  
  
for ($row = 0; $row < 3; $row++) {  
  for ($col = 0; $col < 3; $col++) {  
    echo $employees[$row][$col]."  ";  
  }  
  echo "<br/>";  
}  






?>