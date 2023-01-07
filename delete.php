<?php
    require('./database.php');

    if(isset($_POST['delete'])){
        $id = $_POST['deleteId'];

        $queryDelete = "DELETE FROM accounts WHERE id = $id";
        $sqlDelete = pg_query($dbconn,$queryDelete);
    
        echo '<script>alert("successfully deleted!")</script>';
        echo '<script>window.location.href= "index.php"</script>';
    }else{
        echo '<script>window.location.href= "index.php"</script>';
    }
?>