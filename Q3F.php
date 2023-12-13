<?php 
//this a function file include it with include('Q3F.php')
//or copy the function to the same file and call it there


//pre:      
//post:     print an html form that takes username
function form1(){
//simple form that uses post
print '
        <form action="Q3F.php" method="post">
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
<form action="Q3F.php" method="post">
<h2>Name</h2>
<label for="username">Username:</label>
<input type="text" id="username" name="username" required>

<label for="temp">temp:</label>
<input type="text" id="temp" name="temp" required>

<button type="submit">Login</button>
</form>';
}
?>