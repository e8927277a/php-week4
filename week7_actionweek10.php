<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    

    </body>
</html>
<?php 
    echo "<form action = 'week7_upload.php' method = 'post'>";
    $n = $_POST["number"]; 
    $number = implode($n);
    //echo $number;
    for ($i = 0; $i < $number; $i++) { 
        echo "<input type='file' name='upload'>"."<br/>"; 
    }
    echo "<input type='submit' name='submit'>";