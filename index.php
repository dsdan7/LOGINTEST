<html><body>


<?php
	include_once 'conexao.php';
	$user=$_POST['user'];
    $password=$_POST['password'];
    $querry=$con->query("Select * from user");
    foreach ($con->query("Select * from user") as $row) {
     $realuser=$row['nm_user'];
     $realpass=$row['ps_user'];
    }

    
    if($realuser==$user and $realpass==$password){
        echo "LOGADO";
        
    }else{
        echo "LARAPIO";
    }
?>
</body>
</html>