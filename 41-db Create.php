
  <?php 
 $servername = "localhost";
 $username = "root";
 $password = "";

 //Create Connection
 $conn = mysqli_connect($servername, $username, $password);

 //Check Connection
 if(!$conn)
 {
  die("Connection failed:" . mysqli_connect_error());
 }
 // Create Database
 $sql = "CREATE DATABASE db1";
 if(mysqli_query($conn, $sql))
 {
    echo "Database created Successfully";
 }
 else{
    echo "Error Creating Database: " .mysqli_error($conn);
 }

 mysqli_close($conn);
    ?>

    <!-- DATABASE EK CHOTI CREATE GAREPACHI PHERI RUN GARDA ERROR DEKHAUNE -->
        
    