<?php
$message = "This is passed to the giventext function";
$valueUnchanged = 100;
$refChanged = 500;
$localVar = "Local";
$globalVar = "Global";
$globalArrayVar = "Global Array";
localTest();
globalTest();
globalArrayTest();
//listAllGlobalArray();
defaultValues();

echo "First value before function call 100?:".$valueUnchanged."<br/>";
echo "Second value before function call 500?:".$refChanged."<br/>";
displayText();
displayGivenText($message);
refValFunction($valueUnchanged,$refChanged);
echo "First value after function call 200?:".$valueUnchanged."<br/>";
echo "Second value after function call 1000?:".$refChanged."<br/>";

function defaultValues ($name='Steve'){
    echo "Your default var is: ".$name."<br/>";

}
function localTest(){
    echo "Your local var is: ".$localVar."<br/>";
}

function globalTest(){
    global $globalVar;
    echo "Your global var is: ".$globalVar."<br/>";
}
function globalArrayTest(){
    echo "Your global array var is: ".$GLOBALS['globalArrayVar']."<br/>";
}
function listAllGlobalArray(){
    echo "<pre>";
    print_r($GLOBALS);
    echo "</pre>";
}

function displayText(){
    echo "This function only prints to the screen<br/>";
}

function displayGivenText($valueToPrint){
    echo $valueToPrint."<br/>";
}
function refValFunction($value, &$ref){
    $value = 200;
    $ref = 1000;
}
?>