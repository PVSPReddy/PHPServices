<?php

class GetConnectionService
{
    function getConnection($databaseName)
    {
        //var_dump("Choice: ".$databaseName);
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
            //var_dump("if Choice: ".$databaseName);//pvsivapr@gmail.com
        }
        else if($databaseName === "WebHostDB")
        {
            $servername = "mysql3.gear.host";
            $username = "webhostdb";
            $password = "siva_123456";
            $dbName = "webhostdb";
            $host = 3306;
            //var_dump("else if Choice: ".$databaseName);//venkatasivaprasadreddypulagam@gmail.com
        }
        else if($databaseName === "CountriesDB")
        {
            $servername = "den1.mysql1.gear.host";
            $username = "countriesdb";
            $password = "Siv@123";
            $dbName = "countriesdb";
            $host = 3306;
            //var_dump("else if Choice: ".$databaseName);//venkatasivaprasadreddypulagam@gmail.com
        }
        else if($databaseName === "SivaprasadDB")
        {
            $servername = "den1.mysql4.gear.host";
            $username = "sivaprasaddb";
            $password = "Nb17s!fz486!";
            $dbName = "sivaprasaddb";
            $host = 3306;
            //var_dump("else if Choice: ".$databaseName);//pvsivapr@gmail.com
        }
        else
        {

        }
        //var_dump("ObtainedServerData: \n"."servername: ".$servername."\n"."username: ".$username."\n"."password: "."\$password"."\n"."dbName: ".$dbName."\n");
        $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;
    }
}

?>
