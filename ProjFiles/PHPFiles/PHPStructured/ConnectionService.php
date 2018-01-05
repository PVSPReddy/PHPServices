<?php

class GetConnectionService
{
//    function getConnection()
//    {
//        $servername = "mysql3.gear.host";
//        $username = "webhostdb";
//        $password = "siva_123456";
//        $dbName = "webhostdb";
//        $host = 3306;
//
//        $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
//        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//        return $conn;
//    }

/*
    function getConnection()
    {
        $servername = "mysql4.gear.host";
        $username = "mmplayerdb";
        $password = "\$iva02071992mmplayer";
        $dbName = "mmplayerdb";
        $host = 3306;

        $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;
    }
    */

    function getConnection($databaseName)
    {
        var_dump("Choice: ".$databaseName);
        $servername = "";
        $username = "";
        $password = "";
        $dbName = "";
        $host = 3306;
        if($databaseName === "MMPlayer")
        {
            $servername = "mysql4.gear.host";
            $username = "mmplayerdb";
            $password = "\$iva02071992mmplayer";
            $dbName = "mmplayerdb";
            $host = 3306;
            var_dump("if Choice: ".$databaseName);
        }
        else if($databaseName === "WebHostDB")
        {
            $servername = "mysql3.gear.host";
            $username = "webhostdb";
            $password = "siva_123456";
            $dbName = "webhostdb";
            $host = 3306;
            var_dump("else if Choice: ".$databaseName);
        }
        else
        {

        }
        var_dump("ObtainedServerData: \n"."servername: ".$servername."\n"."username: ".$username."\n"."password: "."\$password"."\n"."dbName: ".$dbName."\n");
        $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;
    }
}

?>
