<?php
//Start php
// *********************************************************************
// This file is used to delete the record in the dranken table 
// * The Form is used to delete data
// * Creation date: 30-05-2022
// * Author: Alessandro Wolf
// * Version: 1.0
// * Last edited by: Alessandro Wolf 31-05-2022
// *********************************************************************
include 'reserveringen.php'; 
//this includes reserveringen to get access to the database
$id=$_GET['id'];
//this functiuon gets the id
$query="DELETE FROM Dranken WHERE id='$id'";
// this query deletes data from dranken table
$data=mysqli_query($connection,$query);
// query for $data from $con and $query
if ($data){
    //small if statment to give an message and to bring you to the dranken menu
    ?>
    <!--end of the php document-->
    <script type="text/javascript">
        //start script for a scuccessfull message
        alert("Data deleted successfully");
        window.open("http://localhost/Examen%203/Dranken.php","_self");
        // this is used to bring you back to the drnaken menu
    </script>
    <!--end script-->
    <?php
    //start php document
}
else
// start of an else stament to give an unsuccessfull message
{
   ?>
   <!--end of php document-->
  <script type="text/javascript">
      // start of the script for an unsuccessefull message
        alert("Please try again");
    </script>
    <!--end script-->
   <?php 
   //start php document
}
?>
<!--end php document-->