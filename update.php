<?php
    require('./database.php');

    if(isset($_POST['edit'])){
       $editId = $_POST['editId'];
       $editUsername = $_POST['editUsername'];
       $editPassword = $_POST['editPassword'];
    }

    if(isset($_POST['update'])){
        $updateId = $_POST['updateId'];
        $updateUsername = $_POST['updateUsername'];
        $updatePassword = $_POST['updatePassword'];

        $queryUpdate = "UPDATE accounts SET username = '$updateUsername', password = '$updatePassword' WHERE id = $updateId";
        $sqlUpdate = pg_query($dbconn,$queryUpdate);
    
        echo '<script>window.location.href= "index.php"</script>';
    }else{
        echo '<script>window.location.href= "index.php"</script>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .main{
            height: 100vh;
            
            display: grid;
            grid-template-rows: auto 1fr;
            justify-items: center;
            row-gap: 20px;
        }
        .main .create-main{
            grid-row: 1/2;
            display: grid;
            grid-auto-rows: auto;
            row-gap: 5px;
        }

        .main .create-main h3{
            text-align: center;
        }

    </style>
    <title>Document</title>
</head>
<body>
    <div class="main">
        <form  class="create-main"  action="update.php" method="post">
            <h3>UPDATE USER</h3>
            <input type="text" name="updateUsername" placeholder="<?php echo $editUsername ?>" required>
            <input type="password" name="updatePassword" placeholder="<?php echo $editPassword ?>" required>
            <input type="submit" name="update" value="UPDATE">
            <input type="hidden" name="updateId" value=" <?php echo $editId ?> ">
        </form>

    </div>

</body>
</html>