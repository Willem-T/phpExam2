<?php 
//dont know wtf hes asking here so im just thowing random stuff i think will be usefull
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div class="container">
    <form action="registerUser.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        
        <label for="background">Background Image:</label>
        <select id="backgroundImage" name="backgroundImage" onchange="q5Function(this.value)">
            <option value="">Choose a Background</option>
            <option value="backgrounds/bg1.jpg">Image 1</option>
            <option value="backgrounds/bg2.jpg">Image 2</option>
            <option value="backgrounds/bg3.jpg">Image 3</option>
            <option value="backgrounds/bg4.jpg">Image 4</option>
        </select>

        <div id="imagePreview"></div>

        <input type="submit" value="Register">
    </form>
    <form action="index.php" method="get">
        <button type="submit">Go Back</button>
    </form>
    </div>
    <script>
        function q5Function(str) {
            if(str == ""){
                document.getElementById("imagePreview").innerHTML = "";
                return;
            }
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("imagePreview").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "previewImage.php?q=" + str, true);
            xmlhttp.send();
        }
        //old jquery
        /*$(document).ready(function () {
            
            var previewDiv = document.getElementById("imagePreview");
    
            $("#backgroundImage").change(function () {
                var selectedValue = $(this).val(); 
    
                if (selectedValue !== "") {
                    previewDiv.innerHTML = '<img src="' + selectedValue + '" alt="Preview">';
                } else {
                    previewDiv.innerHTML = ''; 
                }
            });
        });*/
    </script>
    
</body>
</html>

<?php 
//change the var to somin your using
//copy and paste the td part for more cells
    print "<table>";
    print '<tr>';

    print '<td style="border: 1px solid #000; padding: 8px;">' . $_REQUEST[''] . '</td>';

    print '</tr>';

    print "</table>";
?>