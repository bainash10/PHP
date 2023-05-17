<!-- Asked in 7-8 marks -->
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

 $sql = "SELECT id, fullName, email FROM myGuests";
 $result = mysqli_query($conn, $sql);

 if(mysqli_num_rows($result)>0)
 { //O/p data of each row
    while ($row = mysqli_fetch_assoc($result))
    {
    echo "id:" . $row["id"]."<br>Name:" . $row["fullName"] ."<br>Email:". $row["email"]. "<br>";
}
 }
 else{
    echo "0 results";
 }

 mysqli_close($conn);
    ?>
        `
    