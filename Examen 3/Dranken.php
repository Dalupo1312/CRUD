<?php 
//Start php
// *********************************************************************
// This file is used to manage Dranken what people ordered and how mucht it is  
// * The Form is used for drinks to check the menu and the pricing of it
// * Creation date: 30-05-2022
// * Author: Alessandro Wolf
// * Version: 1.0
// * Last edited by: Alessandro Wolf 31-05-2022
// *********************************************************************
include 'reserveringen.php'; 
//this function includes reserveringen to connect to the database
?>
<!--End of php document-->

<table border="1px" cellpadding="10px" cellspacing="10px">
    <!--This is to make a small clum to store data given by the user-->
    <tr>
        <!--start table record-->
        <th>Merk</th>
        <!--this table header is used for Merk-->
        <th>Inhoud</th>
        <!--This table header is used for Inhoud-->
        <th>Prijs</th>
        <!--This table header is used for Prijs-->
        <th colspan="2">Action</th>
        <!--This is used as a link for editing-->
    </tr>
    <!--end of table record-->
    <?php
    // start php document
    $query="SELECT * FROM Dranken";
    // small query to select everything from dranken
    $data=mysqli_query($connection,$query);
    // this is a small query for $con $query
    $result=mysqli_num_rows($data);
    //this shows the result of the $data
    if ($result){
        // small if statment 
        
        while($row=mysqli_fetch_array($data)) {
            // here $row gets fetched from $data
                ?>
                <!--end php document-->
                <tr>
                    <!--start table record-->
                    <td><?php echo $row['Merk'];  ?></td>
                    <!--this gives out Merk-->
                    <td><?php echo $row['Inhoud'];  ?></td>
                    <!--This gives out Inhoud-->
                    <td><?php echo $row['Prijs'];  ?></td>
                    <!--This gives out Prijs-->
                    <td><a href="Bewerken.php?id=<?php echo $row['id'];  ?>" >Edit</a></td>
                    <!--this is an link with an edit button to Bewerken.php-->

                    <td><a onclick="return confirm('Are you sure, you want to delete?')" href="Delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>
                    <!--this is an conformation to delete the record and it brings you back to the dranken page-->
                </tr>
                <!--end table record-->
                <?php
                // start php document
        }
    }
    else
    // this is an small else statment to display the message that are no records found
    {
        ?>
        <!--end php document-->
        <tr>
            <!--start table record-->
            <td>No record found</td>
            <!--short no record found message-->
        </tr>
        <!--end table record-->
        <?php
        // start php document
    }
    ?>
    <!--end php document-->
</table>
<!--end table-->
<!DOCTYPE html>
<html>
    <!--start html document-->
<head>
    <!--start head-->

</head>
<!--end head -->
<body>
    <!--start body-->
<div>
    <!--start devion-->
    <form action="" method="POST">
        <!--POSt method to display the following-->
            
        <input type="text" name="Merk"
        placeholder="Merk"> <br><br>
        <!--Disaplays Merk-->

        <input type="text" name="Inhoud"
        placeholder="Inhoud"> <br><br>
        <!--Displays Inhoud-->

        <input type="float" name="Prijs"
        placeholder="Prijs"> <br><br>
        <!--Displays Prijs-->

        <input type="submit" name="save_button"
        value="Save">
        <!--Displays a save button-->

    </form>
        <!--end form-->

</div>
<!--end divion-->
<?php
//start php document
if(isset($_POST['save_button'])){
    //small if statment for an save button
    $Merk=$_POST['Merk'];
    //this is to put Merk on the screen
    $Inhoud=$_POST['Inhoud'];
    //This is to put Inhoud on the screen
    $Prijs=$_POST['Prijs'];
    //This is to put Prijs on the screen
    

    $query="INSERT INTO Dranken (Merk,Inhoud,Prijs) VALUES('$Merk','$Inhoud','$Prijs')";
    //This is an query that inserts data into the dranken table
    $data=mysqli_query($connection,$query);
    //this is a small query to put $data into $con and $query
    if ($data) {
        //small if statment to display an good or bad message
        ?>
        <!--end of php document-->
        <script type="text/javascript">
            //start of script
            alert("Data Saved Successfully");
            // this is to display the message that the data is saved successfully
        </script>
        <!--end script-->
        <?php
        // start php document
    }
    else
    //else stament to give an unsuccessfull message
    {
        ?>
        <!--end of php document-->
        <script type="text/javascript">
            //start script to display unsuccessfull message
            alert("Data Saved Unsuccessfully");
            // display unsuccessfull message
        </script>
        <!--end script-->
        <?php
        //start php document
    }
}
?>
<!--end php document-->


</body>
<!--end body-->
<!--end html-->
</html>