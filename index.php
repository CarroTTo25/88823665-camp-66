<h1>File index.php</h1>
<?php

echo "Hello World<br>";

print("Hello World<br>");

print_r("Hello World<br>");

var_dump("Hello World");

/** File index.php */
#Comment
//Comment
for($i = 0; $i < sizeof($my_array); $i++){
    
    echo "<br>";
}


$my_array = array(1,array(2),3,4,5,"myindex" => 6,"myindex2" => 7);
print_r($my_array);
echo "<br>";
$my_array2[] = 1;
$my_array2[] = 2;
$my_array2[] = 3;
print_r($my_array2);

if(False){
    echo "eles if false";

}else
if(True){
    echo "eles if true";
}
else{
    echo "else";
}

$myvar = "Hello World";
$myvar = 1;
echo "<h1>".$myvar."</h1>";
echo "<br>";
$x = 1;
function x(){
    global $x;
    $x = 2;
}
echo $x;
echo "<br>";
x();
echo $x;
echo "<br>";
echo "1.5" + "1";
echo "<br>";
$x = "a";
$x++;
echo $x;
echo "<br>";
?>
<h1><?php echo $myvar; ?></h1>