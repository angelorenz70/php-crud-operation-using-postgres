<?php
    require('./read.php');
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

        .main .read-main{
            grid-row: 2/3;
        }
        .main .read-main tr th{
            width: 200px;
        }
        .main .read-main tr td{
            text-align: center;
        }
        .main .read-main tr td:nth-child(4){
            display: grid;
            grid-auto-flow: column;
        }

    </style>
    <title>Document</title>
</head>
<body>
    <div class="main">
        <form  class="create-main"  action="create.php" method="post">
            <h3>CREATE USER</h3>
            <input type="text" name="username" placeholder="enter username" required>
            <input type="password" name="password" placeholder="enter password" required>
            <input type="submit" name="create" value="CREATE">
        </form>

        <table class="read-main">
            <tr>
                <th>ID</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>ACTIONS</th>
            </tr>
            <?php while($result = pg_fetch_array($sqlAccounts)){ ?>
            <tr>
                <td><?php echo $result['id'] ?></td>
                <td><?php echo $result['username'] ?></td>
                <td><?php echo $result['password'] ?></td>
                <td>
                    <form action="update.php" method="post">
                        <input type="submit" name="edit" value="EDIT">
                        <input type="hidden" name="editId" value=" <?php echo $result['id'] ?> ">
                        <input type="hidden" name="editUsername" value=" <?php echo $result['username'] ?> ">
                        <input type="hidden" name="editPassword" value=" <?php echo $result['password'] ?> ">
                    </form>
                    <form action="delete.php" method="post">
                        <input type="submit" name="delete" value="DELETE">
                        <input type="hidden" name="deleteId" value=" <?php echo $result['id'] ?> ">
                    </form>
                </td>
            <?php } ?>
            </tr>
        </table>
    </div>

</body>
</html>