<?php 
session_start();
if(isset($_SESSION['page_count']))
{
    $_SESSION['page_count']+=1;
}
else{
    $_SESSION['page_count']=1;
}
$_SESSION['views']=1;

echo "You are visitor number". $_SESSION['page_count'];
?>

        
    
</html>