<?php
define ("TESTMODE", false);

function db_connect(){
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "webshop";

    $dbConnection =  mysqli_connect($dbServer, $dbUser, $dbPassword, $dbName) or die ("error connecting to db" .mysqli_error($dbConnection)) ;
    return $dbConnection;
}

function db_query($sql){
    if(TESTMODE){
        echo $sql;
    }
    $dbConnection = db_connect();
    $result =mysqli_query($dbConnection, $sql) or die ("error sending query: " .mysqli_error($dbConnection));
    db_close($dbConnection);
    return $result;
}

function db_close($dbConnection){
    mysqli_close($dbConnection);
}


