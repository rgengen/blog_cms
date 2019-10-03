<?php 
ini_set('display_errors', 1);  //Show errors for debugging

$firstname = "Jane";   //String tye variable
$lastname ="Doe";    //String type variable
$age = 35; //string type variable
$married = true   //Boolean type variable
$childrenNames = array ("Alice","Bob"); //array type variable

$fullName = $firstname."" . $lastname; //concatenation operator
$dogYears = $age/7;   //arothmetic operator
$isAdult = $dogYears > 4;   //comparison operator
$isSettled = $isAdult and $married;    //integer type variable

function getfullName ($firstname, $lastname) { //function name
    return $firstname ."". $lastname;
}

$fullName = getfullName($firstname,$lastname); //using variables
$fullName = getfullName("Alice", "Doe");   //using values

function getIsSettled($age, $married) {//function name
    $dogYears= $age/7;
    $isAdult =$dogYears > 4;
    $isSettled = $isAdult and $married;
    return $isSettled;   //return value
}

$isSettled =getIsSettled ($age,$married);   //using variable
$isSettled= getIsSettled (5,false); //using values

echo $fullName;

if ($isSettled) {
    echo $fullName . "is settled.";
} else {
    echo $fullName . "is not settled.";
}

foreach ($childrenNames as $childName) [
    echo "<li>" . $childName . "</li>";
]

?>