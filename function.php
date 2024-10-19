<?php 
    class Database
    {
        private $conn = false;
        public function __construct ()
        {
            $this->conn = $this->connect();
        }
        public function Connect ()
        {
            $conn = false;
            $conn = mysqli_connect('localhost','root','','shopper_database','3306');
            if (mysqli_connect_errno()) 
            {
                echo "Cann't connect to database: " . mysqli_connect_error($conn);
                exit();
            }
            return $conn;
        }

        public function __destruct() 
        {
            mysqli_close($this->conn);
        }
    }

    $db = new Database;
?>