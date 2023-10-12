<?php
session_start();
if(isset($_SESSION ['visitor_count'])) {
   $_SESSION ['visitor_count']++;
} else {
   $_SESSION['visitor_count'] = 1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
.footer{
position:fixed;
left:0;
bottom:0;
width:100%;
color:white;
background:green;
}
</style>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width,initial-scale=1.0">
<title>page visiitor count</title>
</head>
<h2 align="center">This Is First PHP Program</h2>
<div class="footer">
<p align="center">&copy-- K.Venkatesh all rights reserved
<p>This Page Has Been Visited <?php echo$_SESSION['visitor_count']; ?> Times.</p>
</div>
</body>
</html>