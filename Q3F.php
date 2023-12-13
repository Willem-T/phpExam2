<?php 
//this a function file include it with include('Q3F.php')
//or copy the function to the same file and call it there


//pre:      
//post:     print an html form that takes username
function form1(){
//simple form that uses post
print '
        <form action="Q3.php" method="post">
        <h2>Name</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <button type="submit">Login</button>
    </form>';
}

//pre:      
//post:     print an html form that takes username and temps
function form2(){
    //simple form that uses post
    //remove required if you wanna do more work
print '
<form action="Q3.php" method="POST">
<label for="username">Username:</label>
<input type="text" id="username" name="username" required>

<br>

<label for="temp">Temp:</label>
<input type="text" id="temp" name="temp" required>

<br>

<label for="options">Choose a temp system:</label>
<select id="options" name="options">
    <option value="cel">Celsius</option>
    <option value="fah">Fahrenheit</option>
</select>

<br>

<button type="Submit">submit</button>
</form>';
}
?>