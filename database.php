<?php
echo "hello";
interface Db
{
    public function ConnectDb();

    // public function Select($tableName,$columns);

    // public function Insert($tableName,$columns,$values);

    // public function Update($tableName,$column_name,$value,$id);

    // public function Delete($tableName,$column_name,$id);
    
}
// echo "hi";

class Abc implements Db
{
    public static $connection=" ";
    public static $hostname = "localhost";
    public static $userName = "hestabit";
    public static $password = "hestabit";
    public static $databaseName = "ashish";
    


    public static function ConnectDb()
    {
        self::$connection = new mysqli("localhost","hestabit","hestabit","ashish");
        if ( mysqli_connect_errno() ) {
			printf("Connection failed: %s\ ", mysqli_connect_error());
			exit();
		}
        return self::$connection;
    }
}


Abc::ConnectDb();

