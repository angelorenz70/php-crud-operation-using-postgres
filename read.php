<?php
    require('./database.php');

    $queryAccounts = "SELECT * FROM accounts ORDER BY id ASC";
    $sqlAccounts = pg_query($dbconn, $queryAccounts);
?>