<?php 
//for part 1 do this
?><html>
<script type="text/php">
</script>
</html><?php

//otherwise do this
?><html>

<?php 
//code here
?>

</html><?php




//TODO:   needs better error handling (or maybe not, hasnt broke yet)
//        change all these vars to meet your database needs
$servername = "localhost";
$username = "phpUser";
$password = "Password1";
$dbname = "a5";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";


//!!! you gotta replace users with the table of your database
//grabs the results from the query
$sql = 'SELECT * FROM users';
$result = $conn->query($sql);

//pretty much use result as a conditional, but it still holds data
if ($result) {
  //echo "successful";
} else {
  //echo "Error: " . $conn->error;
}

//!!!   change 'background' to the specific item youre  trying to print from the database
//after you get the result you can make it into a associative array
foreach($result as $row){
    //then you can use $row for printing
    print "<table>";
    print '<tr>';
    print '<td style="border: 1px solid #000; padding: 8px;">' . $row['Background']. '</td>';

    print '</tr>';

    print "</table>";
}


//he might be asking for this
//this is scuffed, it needs to be revised
print '
<form action="" method="POST">

<label for="background">Background Image:</label>
<select id="backgroundImage" name="backgroundImage">
    <option value="">No Background Image</option>
    <option value="backgrounds/bg1.jpg" '. ($row['Background'] == 'backgrounds/bg1.jpg' ? 'selected' : '') .'>Image 1</option>
    <option value="backgrounds/bg2.jpg" '. ($row['Background'] == 'backgrounds/bg2.jpg' ? 'selected' : '') .'>Image 2</option>
    <option value="backgrounds/bg3.jpg" '. ($row['Background'] == 'backgrounds/bg3.jpg' ? 'selected' : '') .'>Image 3</option>
    <option value="backgrounds/bg4.jpg" '. ($row['Background'] == 'backgrounds/bg4.jpg' ? 'selected' : '') .'>Image 4</option>
</select>

<input type="submit" name="update" value="Update Registration">
<input type="submit" name="delete" value="Delete">
</form>';



?>