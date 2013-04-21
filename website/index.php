<?php

  $page = $_GET['i'];

  if (empty($page)) {
    $page = 'home';
  }
?>

<html>

<head>

<title>-- TheGreenhou.se - International Space Apps</title>

<link rel="stylesheet" type="text/css" href="styles.css">

</head>

<body bgcolor='#000000'>

<table width='100%'>
 <tr>
  <td align='left' width='150'>
    <a href='http://theclubhou.se' target='_new'><img src='images/logo-theclubhouse-web.png' alt='TheClubhou.se' width='150' border=0></a>
  </td>
  <td align='center' width='100%'>
    <a href='?i=home'><img src='images/logo.png' width='400' height='150' border=1 alt='TheGreenHou.se'></a>
  </td>
  <td align='right' width='200'>
    <a href='http://spaceappschallenge.org/' target='_new'><img src='images/spaceapps.png' alt='International Space Apps' width='200' border=0></a>
  </td>
 </tr>
</table>

<hr width='100%' color='white' size='1'>

<center>
  <table width='75%' border=0>
   <tr align='center'>
     <td><a class='menulink' href='?i=designs'>Designs</a></td>
     <td><a class='menulink' href='?i=deployment'>Deployment</a></td>
     <td><a class='menulink' href='?i=crops'>Crops</a></td>
     <td><a class='menulink' href='?i=atmosphere'>Atmosphere</a></td>
     <td><a class='menulink' href='?i=tech'>Technology</a></td>
     <td><a class='menulink' href='?i=resources'>Resources</a></td>
     <td><a class='menulink' href='?i=about'>The Team</a></td>
    </tr>
  </table>
</center>

<br>

<?php
 
  include $page . '.php';
 
?>

<br><Br>
<hr width='100%' color='white' size='1'>
<center>
  Copyright theClubhou.se / Chris Williamson 2013
</center>
<br>
</body>
</html>