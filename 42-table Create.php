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
 // SQL to create table
 $sql = "CREATE TABLE MyGuests(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullName VARCHAR(30) NOT NULL,
    email VARCHAR(50),
     contact INT(11) -- last column ho vane comma hunu hunna
 )";
 if(mysqli_query($conn, $sql))
 {
    echo "Table MyGuests created Successfully";
 }
 else{
    echo "Error Creating Table: " .mysqli_error($conn);
 }

 mysqli_close($conn);
    ?>
        
    