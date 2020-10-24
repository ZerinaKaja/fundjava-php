
<?php echo 123;

define("MY_TITLE","Hyrje ne php");


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php 
       
       
       echo MY_TITLE;
?>
</title>
</head>
<body>
    
    
    
    <?php 
       $color = "blue";
       $numer = 1234;
       
      

echo "<hr> the sky is ".$numer.'.';



echo gettype($color);
print "lalalla";

//$arr = [1,2,3,4];
//indexed array


$arr = array(1,2,3,4);







echo "<pre>";
var_dump($arr[1]);
echo "</pre>";
//associative arrays

$ages = array(

"Peter" =>22,
"Anna" => 18,
"Lexie" => 12



);
echo "<pre>";
var_dump($ages);
echo "</pre>";

//krijoni nje array qe permban disa ngjyra te indekset dhe vlerat e ketyre indekseve te jene kodet e ngjyrave

$colors = array(

    "red" => "#ff0000",
    "blue" => "#0000ff",
    "green" => "#00ff00",
   
);

echo "<pre>";
var_dump($colors);
echo "</pre>";




foreach($colors as $key=>$item){


//vetem kur fjala eshte red te ngjyroset
if($key == "red"){
    echo "<h1 style='color:$item'>$key</h1>";
}
else if($key == "blue"){
    echo " <h1 style= 'color:$key'>$item</h1>";
}
else
echo "<h1>$key</h1>";

}

function myFunction($var){

    echo "<script> alert('$var') </script>";





}
myFunction("pershendetje");


?>











</body>
</html>