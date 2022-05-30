<?php
//Start php
// *********************************************************************
// This file is used to manage reservations 
// * The Form is used for reservations of the costumer
// * Creation date: 30-05-2022
// * Author: Alessandro Wolf
// * Version: 1.0
// * Last edited by: Alessandro Wolf 31-05-2022
// *********************************************************************
include 'reserveringen.php'; ?>
<!--This function includes reserveringen to get access to the databse-->
<!DOCTYPE html>
<!--Start html document-->
<html>
<head>
<!--This is the head of the html document-->
</head>
<!--End of the head-->
<body>
<!--Begin of the html body-->
<div>
<!--Start of the devion-->
        <form action="" method="POST">
         <!--This method POST is used to put the following data to the screen-->
            
        <input type="number" name="ID"
        placeholder="ID"> <br><br>
        <!--This input shows the ID on the screen-->

        <input type="text" name="Voornaam"
        placeholder="Voornaam"> <br><br>
        <!--This input shows the Voornaam on the screen-->

        <input type="text" name="Achternaam"
        placeholder="Achternaam"> <br><br>
        <!--This input shows the Achternaam on the screen-->

        <input type="number" name="Leeftijd"
        placeholder="Leeftijd"> <br><br>
        <!--This input shows the Leeftijd on the screen-->

        <input type="submit" name="save_button"
        value="Save">
        <!--This is an safe button-->
    
        </form>
        <!--End of the form-->

</div>
<!--End of the divion-->
<?php
// start of the php document
if(isset($_POST['save_button'])){
    // this function displays a save button
    $ID=$_POST['ID'];
    //this displays an ID
    $Voornaam=$_POST['Voornaam'];
    // This displays the voornaam
    $Achternaam=$_POST['Achternaam'];
    //This displays the achternaam
    $Leeftijd=$_POST['Leeftijd'];
    //This displays the leeftijd

    $query="INSERT INTO reservering (ID,Voornaam,Achternaam,Leeftijd) VALUES('$ID','$Voornaam','$Achternaam','$Leeftijd')";
    // this query is used to insert data into the database
    $data=mysqli_query($connection,$query);
    //this query uses the $con and $query
    if ($data) {
        // this is an simple if statment
        ?>
        <!--End of the php document-->
        <script type="text/javascript">
            // start of a little script to output a message
            alert("Data Saved Successfully");
        </script>
        <!--end of script-->
        <?php
        //start of the php document
    }
    else
    // start of else statment
    {
        ?>
        <script type="text/javascript">
            // start of an smaal script that displays a unsuccessesfull message
            alert("Data Saved Unsuccessfully");
        </script>
        <!--End of script-->
        <?php
        //start php document
    }
}
?>
<!--end php document-->


</body>
<!--end of body-->
<!--end of html-->
</html>