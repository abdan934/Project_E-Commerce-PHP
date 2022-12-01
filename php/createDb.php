<?php


class createDb
{
    public $servername;
    public $username;
    public $password;
    public $dbname;
        public $tablename;
        public $tableuser;
        public $con;
        
        
        // class constructor
        public function __construct(
        $dbname = "productdb",
        $tablename = "produk",
        $servername = "localhost",
        $username = "root",
        $password = "",
        // $tableuser = "user"
    )
    {
      $this->dbname = $dbname;
      $this->tablename = $tablename;
    //   $this->tableuser = $tableuser;
      $this->servername = $servername;
      $this->username = $username;
      $this->password = $password;
      
      // create connection
      $this->con = mysqli_connect($servername, $username, $password);
      
      // Check connection
      if (!$this->con){
          die("Connection failed : " . mysqli_connect_error());
        }
        
        // query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
        
        // execute query
        if(mysqli_query($this->con, $sql)){
            
            $this->con = mysqli_connect($servername, $username, $password, $dbname);
            
            // sql to create new table
            $sql = " CREATE TABLE IF NOT EXISTS $tablename
                            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                          product_name VARCHAR (25) NOT NULL,
                             product_price FLOAT,
                             product_image VARCHAR (100),
                             satuan VARCHAR(100),
                             expired YEAR
                            );";
                            
                            // $user = "CREATE TABLE IF NOT EXISTS $tableuser
                            // (id_user INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            //  nama VARCHAR (25) NOT NULL,
                            //  username VARCHAR (25) NOT NULL,
                            //  password VARCHAR (100),
                            //  level VARCHAR(20) 
                            // );";
                            if (!mysqli_query($this->con, $sql )){
                                echo "Error creating table : " . mysqli_error($this->con);
                            }
                            
                        }else{
                            return false;
                        }
                    }
                    
                    // get product from the database
    public function getData(){
        $sql = "SELECT * FROM $this->tablename";
        
        $result = mysqli_query($this->con, $sql);
        
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
        // // get user from the database
        // public function getUser(){
            //     $sql = "SELECT * FROM $this->tableuser";
            
            //     $result = mysqli_query($this->con, $sql);
            
            //     if(mysqli_num_rows($result) > 0){
                //         return $result;
                //     }
        // }
}
                class CreateToko
                {
                        public $servername;
                        public $username;
                        public $password;
                        public $dbname;
                        public $tablename;
                        public $con;
                
                
                        // class constructor
                    public function __construct(
                        $dbname = "productdb",
                        $tablename = "toko",
                        $servername = "localhost",
                        $username = "root",
                        $password = ""
                    )
                    {
                      $this->dbname = $dbname;
                      $this->tablename = $tablename;
                      $this->servername = $servername;
                      $this->username = $username;
                      $this->password = $password;
                
                      // create connection
                        $this->con = mysqli_connect($servername, $username, $password);
                
                        // Check connection
                        if (!$this->con){
                            die("Connection failed : " . mysqli_connect_error());
                        }
                
                        // query
                        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
                
                        // execute query
                        if(mysqli_query($this->con, $sql)){
                
                            $this->con = mysqli_connect($servername, $username, $password, $dbname);
                
                            // sql to create new table
                            $sql = " CREATE TABLE IF NOT EXISTS $tablename
                                            (id_toko INT(5) NOT NULL  PRIMARY KEY,
                                             nama_toko VARCHAR (25) NOT NULL,
                                             nama_pemilik VARCHAR(20) NOT NULL,
                                             alamat VARCHAR (25) NOT NULL,
                                             no_hp INT (13)
                                            );";
                
                            if (!mysqli_query($this->con, $sql)){
                                echo "Error creating table : " . mysqli_error($this->con);
                            }else{
                                return false;
                            }
                
                        }else{
                            return false;
                        }
                    }
                
                    // get user from the database
                    public function getToko(){
                        $sql = "SELECT * FROM $this->tablename";
                
                        $result = mysqli_query($this->con, $sql);
                
                        if(mysqli_num_rows($result) > 0){
                            return $result;
                        }
                    }
                }

                class CreateUser
                {
                        public $servername;
                        public $username;
                        public $password;
                        public $dbname;
                        public $tablename;
                        public $con;
                
                
                        // class constructor
                    public function __construct(
                        $dbname = "productdb",
                        $tablename = "user",
                        $servername = "localhost",
                        $username = "root",
                        $password = ""
                    )
                    {
                      $this->dbname = $dbname;
                      $this->tablename = $tablename;
                      $this->servername = $servername;
                      $this->username = $username;
                      $this->password = $password;
                
                      // create connection
                        $this->con = mysqli_connect($servername, $username, $password);
                
                        // Check connection
                        if (!$this->con){
                            die("Connection failed : " . mysqli_connect_error());
                        }
                
                        // query
                        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
                
                        // execute query
                        if(mysqli_query($this->con, $sql)){
                
                            $this->con = mysqli_connect($servername, $username, $password, $dbname);
                
                            // sql to create new table
                            $sql = " CREATE TABLE IF NOT EXISTS $tablename
                                            (id_user INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                             nama VARCHAR (25) NOT NULL,
                                             username VARCHAR (25) NOT NULL,
                                             password VARCHAR (100),
                                             level VARCHAR(20) 
                                            );";
                
                            if (!mysqli_query($this->con, $sql)){
                                echo "Error creating table : " . mysqli_error($this->con);
                            }else{
                                return false;
                            }
                
                        }else{
                            return false;
                        }
                    }
                
                    // get user from the database
                    public function getUser(){
                        $sql = "SELECT * FROM $this->tablename";
                
                        $result = mysqli_query($this->con, $sql);
                
                        if(mysqli_num_rows($result) > 0){
                            return $result;
                        }
                    }
                }
                
?>