<?php 
include('Q3F.php');

//using post on the form
//using request for testing, prolly should change it to post for less headache later on
if(isset($_REQUEST['username'])){
    print "<table>";

    print 'username, '. $_REQUEST['temp'] . ' ' . $_REQUEST['options'] .' , temp convert to '. returnTempSystem() .'';
    print '<tr>';
    print '<td style="border: 1px solid #000; padding: 8px;">' . $_REQUEST['username'] . '</td>
    <td style="border: 1px solid #000; padding: 8px;">' . $_REQUEST['temp'] . 
    '<td style="border: 1px solid #000; padding: 8px;"> ' . tempCalc($_REQUEST['temp'], $_REQUEST['options']) . '</td>';

    print '</tr>';

    print "</table>";
}

//prints the form if theres no data from post
else{
form2();
}

//too lazy to fix the additional percision points
//pre:      takes an numb and the system its using
//post:     returns the calculation for the opposite system
function tempCalc($temp, $system){
    if($system == "cel"){
        return ($temp * (9/5) +32);
    }
    else {
        return (($temp -32) * (5/9));
    }
}

//pre:      takes the session var of options
//post:     returns the opposite of the var string
function returnTempSystem(){
    if($_REQUEST['options'] == "cel"){
        return "Fahrenheit";
    }
    else{
        return "Celsius";
    }
}
?>