  <!-- IMPORTANT asked for 3 marks in exam -->
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
 echo "Connected Successfully";
    ?>
        
    
