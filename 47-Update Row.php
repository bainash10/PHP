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

 $sql = "UPDATE myGuests SET email='baidar.nischal@gmail.com'
 WHERE fullName = 'Nis Baidar'";

 if(mysqli_query($conn, $sql))
 {
    echo "Records Updated Successfully";
 }
 else{
    echo "Error : ".sql. "<br>" .mysqli_error($conn);
 }

 mysqli_close($conn);
    ?>
        
    