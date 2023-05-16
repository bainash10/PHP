  <!-- IMPORTANT asked for 3 marks in exam -->
  <?php 
 $servername = "localhost";
 $username = "root";
 $password = "";
$dbname = "db1";

 //Create Connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);

 //Check Connection
 if(!$conn)
 {
  die("Connection failed:" . mysqli_connect_error());
 }

 $sql = "DELETE FROM myGuests WHERE fullName like 'R%'";

 if(mysqli_query($conn, $sql))
 {
    echo "Records Deleted Successfully";
 }
 else{
    echo "Error Creating Table: " .mysqli_error($conn);
 }

 mysqli_close($conn);
    ?>
        
    