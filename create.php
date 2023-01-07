<?php
    require('./database.php');

    if(isset($_POST['create'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $queryInsert = "INSERT INTO accounts VALUES(default, '$username' , '$password')";
        $sqlInsert = pg_query($dbconn,$queryInsert);
    
        echo '<script>alert("successfully created!")</script>';
        echo '<script>window.location.href= "index.php"</script>';
    }else{
        echo '<script>window.location.href= "index.php"</script>';
    }
?>