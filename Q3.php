<?php 
include('Q3F.php');

//using request for testing, prolly should change it to post for less headache later on
if(isset($_REQUEST['username'])){
    print "<table>";

    print 'username, '. $_REQUEST['temp'] . ' ' . $_REQUEST['options'] .' , temp convert to '. dumbAssStupidphp() .'';
    print '<tr>';
    print '<td style="border: 1px solid #000; padding: 8px;">' . $_REQUEST['username'] . '</td>
    <td style="border: 1px solid #000; padding: 8px;">' . $_REQUEST['temp'] . 
    '<td style="border: 1px solid #000; padding: 8px;"> ' . tempCalc($_REQUEST['temp'], $_REQUEST['options']) . '</td>';

    print '</tr>';

    print "</table>";
}

else{
form2();
}

//make this output html calcs
//too lazy to fix the additional percision points
function tempCalc($temp, $system){
    if($system == "cel"){
        return ($temp * (9/5) +32);
    }
    else {
        return (($temp -32) * (5/9));
    }
}


function dumbAssStupidphp(){
    if($_REQUEST['options'] == "cel"){
        return "Fahrenheit";
    }
    else{
        return "Celsius";
    }
}
?>