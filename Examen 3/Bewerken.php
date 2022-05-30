<?php
//Start php
// *********************************************************************
// This file is used to Edit the stored Data
// * The Form is used for editing
// * Creation date: 30-05-2022
// * Author: Alessandro Wolf
// * Version: 1.0
// * Last edited by: Alessandro Wolf 31-05-2022
// *********************************************************************
 include 'reserveringen.php';
 // this function is to include the connection file 
$id=$_GET['id'];
//This is used to fetch the id
$select="SELECT * FROM Dranken WHERE id='$id'";
//This is a small query to get everything from the Dranken Database
$data=mysqli_query($connection,$select);
// This is to run the query $con and $select
$row=mysqli_fetch_array($data);
//Here i fetch the data with an array
?>
<!--End of php-->
<div>
<!--start of an Devion-->
    <form action="" method="POST">
        <!--Here is used the method POST to Post data onto the screen-->
            
        <input value="<?php echo $row['Merk'] ?>" type="text" name="Merk"
        placeholder="Merk"> <br><br>
        <!--This is used to put information to the website-->

        <input type="text" name="Inhoud"
        placeholder="Inhoud" value="<?php echo $row['Inhoud'] ?>"> <br><br>
        <!--This is used to put information to the website-->

        <input type="float" name="Prijs"
        placeholder="Prijs" value="<?php echo $row['Prijs'] ?>"> <br><br>
        <!--This is used to put information to the website-->

        <input type="submit" name="update_button"
        value="Update">
        <!--This is an button to update the given data-->
    
    </form>
        <!--End form-->

</div>
<!--End Divion-->
<?php
// start php
if(isset($_POST['update_button'])){
    // This displays the update button
    $Merk=$_POST['Merk'];
    // This displays the Merk section
    $Inhoud=$_POST['Inhoud'];
    // This displays the Inhoud section
    $Prijs=$_POST['Prijs'];
    // This displays the Prijs section
    

    $update="UPDATE Dranken SET Merk='$Merk',Inhoud='$Inhoud',Prijs='$Prijs' WHERE id='$id' ";
    // This is a small query to update de dranken tabel
    $data=mysqli_query($connection,$update);
    // small query for $con and $update
    if ($data) {
        // This is an if statment to set an message and get you back to the home screan
        ?>
        <!--End php and begin of an small script to display an message of successes-->
        <script type="text/javascript">
            // start script
            alert("Data Updated Successfully");
            window.open("http://localhost/Examen%203/Dranken.php","_self");
        </script>
        <!--End script-->
        <?php
        // start php
    }
    else
    // else statement for when the if statment doesnt work
    {
        ?>
        <!--End php-->
        <script type="text/javascript">
        // start script small unsuccessfull message
            alert("Data Updated Unsuccessfully");
        </script>
        <!--End script-->
        <?php
        //Start php
    }
}
?>
<!--End php-->