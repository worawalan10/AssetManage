<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style/stylesheet-compiled.css?<?php echo rand(0,999); ?>">
        <script src="https://www.w3schools.com/lib/w3.js"></script>
        <?php 
            include "header.html";
        ?>
    </head>
    <body>
        <div class="container">
            <form action="genqr.php" method="post" enctype="multipart/form-data">
            <center>
            <h2>Select .txt file to upload new data</h2>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload File" name="submit">
            </center>
        </form>
        </div>
   
    </body>
</html>