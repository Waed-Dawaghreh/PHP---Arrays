<?php
    // 1. $color = array('white', 'green', 'red', 'blue', 'black');
    // Write a script that display the following string -
    // "The memory of that scene for me is like a frame of film forever frozen at that
    // moment: the red carpet, the green lawn, the white house, the leaden sky. The
    // new president and his first lady. - Richard M. Nixon"
    // The words 'red', 'green' and 'white' should come from $color variables .
    
    echo "1. array('white', 'green', 'red', 'blue', 'black')<br>";
    $color = array('white', 'green', 'red', 'blue', 'black');
    echo "The memory of that scene for me is like a frame of film forever frozen at that
    moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The
    new president and his first lady. - Richard M. Nixon";
    echo "<br>";
    echo "<hr>";

    //=================================================================
//2. $color = array('white', 'green', 'red'')
      // Write a PHP script that will display the colors in the following order :
      // Output :
      // white, green, red,
      // ● green
      // ● red
      // ● white
    echo "2.Write a PHP script that will display the colors in the following order";
    $colors=array('white', 'green', 'red');
    sort($colors);
    $arrayLength=count($colors);
    echo "<ul>";
    for ($index=0; $index <$arrayLength ; $index++) { 
        echo "<li>$colors[$index]</li>";
    }
    echo "</ul>";
    echo "<br>";
    echo "<hr>";

    //====================================================================
     

//Create a PHP script which displays the capital and country name from the above
// array $cities. Sort the list by the capital of the country
// The capital of Netherlands is Amsterdam
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>
"Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" =>
"Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
"Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United
Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech
Republic"=>"Prague", "Estonia"=>"Tallinn", "Hungary"=>"Budapest") ;
echo "3.Write a PHP script that will display the colors in the following order<br>";

foreach($cities as $key => $key_value){
    echo "The capital of $key is $key_value <br>";
}
echo "<hr>";

//==========================================================================
// 4. $x = array(1, 2, 3, 4, 5);
// Delete an element from the above PHP array. After deleting the element, integer
// keys must be normalized.
// Sample Output :
// array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
// array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }

echo "4.Delete an element from the above PHP array.<br>";
$x = array(1, 2, 3, 4, 5);
var_dump($x);
echo "<br>";
if(($val=array_search(4,$x))!==false){
    unset($x[$val]);
}
var_dump($x);
echo "<br>";
echo "<hr>";

//===========================================================================
// 5. $color = array(4 => 'white', 6 => 'green', 11=> 'red');
// Write a PHP script to get the first element of the above array.
// Expected result : white
$color2 = array(4 => 'white', 6 => 'green', 11=> 'red');
echo "5.Write a PHP script to get the first element of the above array.<br>";
echo $color2[4];
echo "<br>";
echo "<hr>";

//=========================================================================
// 6. Write a PHP script that inserts a new item in an array in any position.
// Expected Output :
// Original array :
// 1 2 3 4 5
// After inserting '$' the array is :
// 1 2 3 $ 4 5
echo "6. Write a PHP script that inserts a new item in an array in any position.<br>";
$arr=[1,2,3,4,5];
print_r($arr);
echo "<br>";
$b = array_merge(array_slice($arr, 0, 2), array('$'), array_slice($arr, 2));
print_r($b);
echo "<br>";
echo "<hr>";

//=============================================================================
// 8. Write a PHP script to sort the following associative array :
// array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
// a) ascending order sort by value
// b) ascending order sort by Key
// c) descending order sorting by Value
// d) descending order sorting by Key
echo "7.  Write a PHP script to sort the following associative array.<br>";
$arr2=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
echo "a) ascending order sort by value.<br><br>";
asort($arr2);
foreach ($arr2 as $key => $value) {
  echo "Key=" . $key . ", Value=" . $value;
  echo "<br>";
}
echo "b) ascending order sort by Key.<br><br>";
ksort($arr2);
foreach ($arr2 as $key => $value) {
  echo "Key=" . $key . ", Value=" . $value;
  echo "<br>";
}
echo "c) descending order sorting by Value.<br><br>";
arsort($arr2);
foreach ($arr2 as $key => $value) {
  echo "Key=" . $key . ", Value=" . $value;
  echo "<br>";
}
echo "d) descending order sorting by Key.<br><br>";
krsort($arr2);
foreach ($arr2 as $key => $value) {
  echo "Key=" . $key . ", Value=" . $value;
  echo "<br>";
}
echo "<br>";
echo "<hr>";
// 8. Write a PHP script to calculate and display average temperature, five lowest
// and highest temperatures.
// Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
// 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
// Expected Output :
// Average Temperature is : 70.6
// List of seven lowest temperatures : 60, 62, 63, 63, 64,
echo "8.Write a PHP script to calculate and display average temperature.<br>";
$temperatures=[78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 73, 72, 65, 74, 65, 64, 68, 73, 75, 79, 73];
$arrayTempLength=count($temperatures);
$avg=(array_sum($temperatures)/$arrayTempLength);
echo "Average Temperature is :$avg<br>";
sort($temperatures);
echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temperatures[$i].", ";
}
rsort($temperatures);
echo "<br> List of five highest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temperatures[$i].", ";
}
echo "<br>";
echo "<hr>";

//=================================================================
// 11. Write a PHP program to merge the following two arrays.
// Sample arrays :
// $array1 = array(array(70,40), array(25, 45));
// $array2 = array("example", "com");

echo "9.Write a PHP program to merge the following two arrays.<br>";
$array1 = array(array(70,40), array(25, 45));
$array2 = array("example", "com");
print_r(array_merge_recursive($array1,$array2));
echo "<br>";
echo "<hr>";

//=====================================================================
//12. Write a PHP function to change the following array's all values to upper or
// lower case.
echo "10.Write a PHP function to change the following array's all values to upper or lower.<br>";
$color3 = array('A' => 'Blue', 'B' => 'Green', 'C' => 'Red');
print_r($color3);
echo "<br>";
$color3 = array_flip($color3); 
$color3 = array_change_key_case($color3, CASE_UPPER);
$color3 = array_flip($color3); 
print_r($color3);
echo "<br>";
echo "<hr>";

//==============================================================
// 13. Write a PHP script which displays all the numbers between 200 and 250 that
// are divisible by 4.
echo "11.Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.<br>";
echo implode(",",range(200,250,4));
echo "<br>";
echo "<hr>";

//===============================================================
// 14. Write a PHP script to get the shortest/longest string length from an array.
// Sample arrays : ("abcd","abc","de","hjjj","g","wer")
// Expected Output : The shortest array length is 1. The longest array length is 4.
echo "12. Write a PHP script to get the shortest/longest string length from an array.<br>";
$strArray=array("abcd","abc","de","hjjj","g","wer");
$strArray2=[];
for ($i=0; $i <count($strArray) ; $i++) { 
       array_push($strArray2,strlen($strArray[$i]));
     }
print_r($strArray2);
echo "<br>";
sort($strArray2);

echo "The shortest array length is $strArray2[0] <br>";
rsort($strArray2);
echo "The longest array length is $strArray2[0] <br>";
echo "<br>";
echo "<hr>";

//=================================================================
// 13. Write a PHP script to generate unique random numbers within a range.
// Sample Range : (11, 20)
// Sample Output : 17 16 13 20 14 19 18 15 11 12
echo "13. Write a PHP script to generate unique random numbers within a range.<br>";
for ($i=0; $i < 9; $i++) { 
   echo rand(11,20);
   echo "\t ,";
}
echo "<br>";
echo "<hr>";
//=====================================================================
// 16. Write a PHP script to get the largest key in the array.
echo "14. Write a PHP script to get the largest key in the array.<br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
var_dump($age);
echo "<br>";
$maxKey = max( array_keys( $age) );
echo "largest key in the array :  $maxKey<br>";
echo "<br>";
echo "<hr>";

//======================================================================
// 17. Write a PHP function that returns the lowest integer in the array that is not 0.
echo "15. Write a PHP function that returns the lowest integer in the array that is not 0.<br>";
$sampleArray = [0,2,3,20,-10];
sort($sampleArray);
// print_r($sampleArray);
if($sampleArray[0]===0){
    echo "lowest integer in the array = $sampleArray[1]<br>";
}else{
echo "lowest integer in the array = $sampleArray[0]<br>";
}
echo "<br>";
echo "<hr>";

//======================================================================
// 18. Write a PHP function to floor decimal numbers with precision.
// Note: Accept three parameters number, precision, and $separator
echo "18. Write a PHP function to floor decimal numbers with precision.<br>";
function floorNum($number, $precision, $separator)
{
$exNum=explode($separator, $number);
$exNum[1]=substr_replace($exNum[1],$separator,$precision,0);
if($exNum[0]>=0)
{$exNum[1]=floor($exNum[1]);}
else
{$exNum[1]=ceil($exNum[1]);}

$num= array($exNum[0],$exNum[1]);
return implode($separator,$num);
}
print_r(floorNum(300.4927, 3, ".")."<br>");
echo "<br>";
echo "<hr>";

//=====================================================================
// 19. Write a PHP script to print "second" and Red from the following array.
// Sample Data :
// $color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
// "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
// "holes" => array ( "First", 5 => "Second", "Third"));
echo "18.Write a PHP script to print second and Red from the following array.<br>";
$color4 = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
"numbers" => array ( 1, 2, 3, 4, 5, 6 ),
"holes" => array ( "First", 5 => "Second", "Third"));
echo $color4["color"]["a"];
echo "\t";
echo $color4["holes"][5];
echo "<br>";
echo "<hr>";
//====================================================================
//20. Write a PHP function to sort an array according to another array acting as a
// priority list.
echo "19. Write a PHP function to sort an array according to another array acting as a priority list.<br>";
$acopm=[1,2,4,3,5];
function cmp($a, $b) 
{ 
$acopm=[1,2,4,3,5];
  foreach($acopm as $key => $value) 
    { 
      if($a==$value) 
        { 
          return 0; 
          break; 
        } 

      if($b==$value) 
        { 
          return 1; 
          break; 
        } 
    } 
} 
$array3=[1,2,3,6,7,4];
usort($array3, "cmp"); 
print_r($array3);
echo "<br>";
echo "<hr>";

//==================================================================
//24. Write a PHP script to sort an array using case-insensitive natural ordering.
echo "24. Write a PHP script to sort an array using case-insensitive natural ordering.<br>";
$array4= array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');
natcasesort($array4);
echo "case-insensitive natural ordering<br>";
print_r($array4);
echo "<br>";
echo "<hr>";
?>