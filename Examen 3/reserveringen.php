<?php
// *********************************************************************
// This file is used to asstablish a connection with the database and give a style to the php document
// * The form is handeld and stored in the database
// * Creation date: 30-05-2022
// * Author: Alessandro Wolf
// * Version: 1.0
// * Last edited by: Alessandro Wolf 31-05-2022
// *********************************************************************

// This part is to connect to the given Database
$host="localhost";
$user="root";
$password="";
$database="dbtaste";
$connection=mysqli_connect($host,$user,$password,$database);
//This if statments checks if the connection is OK or NOT OK
    if($connection)
    {
     echo"";
    }
else
    {
     echo"NOT OK";
    }
// end of php
?>
<!--Start of HTML--> 
<!DOCTYPE html>
<html>
<!--Start of the head-->
    <head>
<!--Here i stored links that are used for the styling-->
    <link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!--End of the head-->
    </head>
<!--Start of the body-->
    <body>
<!--The body of an HTML document is where you see your written data in your website-->
<!--This code is used for a navigation bar-->
<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
  <a class="navbar-brand" href="reserveringen.php">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <!--These classes are used for tabs in the navbar-->
      <li class="nav-item active">
        <a class="nav-link" href="Reserveringen2.php">Reservering</a>
        <!--This is to display Reserveringen into the navbar-->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Dranken.php">Dranken</a>
        <!--This is to display Dranken into the navbar-->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Overzicht barman</a>
        <!--This is to display Overzicht barman into the navbar-->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Bestellingen</a>
        <!--This is to display Bestellingen into the navbar-->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Bewerken.php"></a>
      </li>
    </ul>
  </div>
  <!--End of nav-->
</nav>
<!--End of Body-->
</body>
<!--End of HTML-->
</html>