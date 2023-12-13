<?php 
//you can include this file with include('Q2.php')
//pass the array with the function


//example of associative array
$assocArray = array(
    'Google' => 'https://www.google.com',
    'Facebook' => 'https://www.facebook.com',
    'Twitter' => 'https://www.twitter.com'
);

//pre:      takes an associative array
//post:     prints a html links within a table
function createLinks($assocArray){
    echo '<table>';
    foreach($assocArray as $key => $value){
        echo '<tr>';
        echo '<td style="border: 1px solid #000; padding: 8px;"><a href="' . $value . '">Link ' . $key . '</a></td>';
        echo '</tr>';
    }
}

//use this for testing
//createLinks($assocArray);

//or do this


//!!!       Dont copy the array cus it will output the same thing every time
//pre:      takes an associative array
//post:     prints a html table formatted as [$value][$key]
function createLinks2($linksArray){
    //fix this later idk why i gotta put this here
    $assocArray = array(
        'Google' => 'https://www.google.com',
        'Facebook' => 'https://www.facebook.com',
        'Twitter' => 'https://www.twitter.com'
    );
    
    //this is fucking broken 
    //fix the array (something is wrong with the passing)
    echo '<table>';
    foreach($assocArray as $key => $value){
        echo '<tr>';
        echo '<td style="border: 1px solid #000; padding: 8px;">' . $value . '</td><td style="border: 1px solid #000; padding: 8px;"> ' . $key . '</td>';
        echo '</tr>';
    }
}
//use this for testing
//createLinks2($linksArray);

?>