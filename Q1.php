<?php 
//example of associative array
$assocArray = array(
    'Google' => 'https://www.google.com',
    'Facebook' => 'https://www.facebook.com',
    'Twitter' => 'https://www.twitter.com'
);

//pre:      takes an associative array
//post:     prints a html link with the value and key
function creatLinks($assocArray){
    foreach($assocArray as $key => $value){
        echo '<a href="' . $value . '">' . $key . '</a><br>';
    }
}

//or do this

//pre:      takes an array of links
//post:     prints html links to corresponding links
function createLinks2($linksArray){
    for($i = 0; $i < count($linksArray); $i++){
        echo '<a href="' . $linksArray[$i] . '">Link ' . ($i + 1) . '</a><br>'; 
    }
}

//links in an array
$linksArray = array(
    "https://www.google.com", 
    "https://www.facebook.com", 
    "https://www.twitter.com");
createLinks2($linksArray);
?>