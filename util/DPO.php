
<?php
    class DPO{
        private const SERVER_NAME = "localhost?characterEncoding=UTF-8";
        private const  USER_NAME = "root";
        private const PASSWORD = "";
        //sửa lại tên database
        private const DB_NAME = "quanlythuvien";
        private static $conn = null;

        public static function getSession(){
            if(self::$conn != null){
                return self::$conn ;
            }else{
                try {
                    self::$conn = new PDO("mysql:host = self::SERVER_NAME; dbname = self::DB_NAME", self::USER_NAME, self::PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                    // set the PDO error mode to exception
                    self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch(PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
                }
                return self::$conn ;
            }
        }

        public static function closeSession(){
            self::$conn = null;
        }

        public static function getAllData($sql){
            try{
                $stmt = self::$conn->query($sql, PDO::FETCH_ASSOC);
                $result = $stmt->fetchAll();
                return $result;
            }catch (Exception $e){
                return null;
            }

        }

        public static function getData($sql,$param = array()){
            try{
                $stmt = self::$conn->prepare($sql);
                $stmt->execute($param);
                $result = $stmt->fetchAll();

                return $result;
            }catch (Exception $e){
                return null;
            }

        }
        public static function updateData($sql,$param = array()){
            try{

                $stmt = self::$conn->prepare($sql);
                $stmt->execute($param);
                $result = $stmt->rowCount();
                return $result;
            }catch (Exception $e){
                return null;
            }
        }

        public function __destruct()
        {
            self::$conn = null;
        }


    }
?>