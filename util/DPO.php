
<?php
    class DPO{
        private const SERVER_NAME = "localhost?characterEncoding=UTF-8";
        private const  USER_NAME = "root";
        private const PASSWORD = "";
        //sửa lại tên database
        private const DB_NAME = "quanlythuvien";
        private static $conn=null;

        public static function getSession(){
            try {
                $conn = new PDO("mysql:host = self::SERVER_NAME; dbname = self::DB_NAME", self::USER_NAME, self::PASSWORD);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected successfully";
              } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
              }
              return  $conn;
        }

        public static function closeSession(){
            $conn=null;
        }
    }
?>