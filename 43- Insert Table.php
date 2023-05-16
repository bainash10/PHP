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
 $sql = "INSERT INTO MyGuests( fullName, email, contact)
 VALUES ('Nischal Baidar', 'nis@gmail.com', 984111)"; 

// contact milena same aaudaina cause int ko size sanga not match

 if(mysqli_query($conn, $sql))
 {
    echo "Table MyGuests created Successfully";
 }
 else{
    echo "Error Creating Table: " .mysqli_error($conn);
 }

 mysqli_close($conn);
    ?>
        
    