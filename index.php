<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="get">
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="text" name="password"><br>
        <input type="sumbit" value="Log in"><br>
    </form>

    echo $_GET = 

</body>

</html>

<?php

echo $_GET =

// $_GET, $_POST = special variables used to collect data from an HTML form 
//                 data is sent to the file in the action attribute of <form>
//                  <form action="sme.file.php" method="get">

// $_GET =  Data is appended to the url 
//          Not secure
//          char limit 
//          Bookmark is possible w/ values
//          GET requests can be cached 
//          Better for a search page 

// $_POST = Data is packaged inside the body of the HTTP request 
//          More secure
//          No data limit 
//          Bookmark is possible w/ values
//          GET requests can be cached
//          Better for a search page  


?>