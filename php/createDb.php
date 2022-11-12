<?php

    class createDb
    {
        public $servername;
        public $username;
        public $password;
        public $dbname;
        public $tablename;
        public $connection;


    //Constructor
    public function __construct(
        $dbname = "Newdb",
        $tablename = "NamaProduk",
        $servername = "localhost",
        $username = "root",
        $password = ""
    )
    {
        $this->dbname=$dbname;
        $this->tablename=$tablename;
        $this->servername=$servername;
        $this->username=$username;
        $this->password=$password;

        //create Connection

        $this->con=mysqli_connect($servername,$username,$password);
        
        //check connection
        if(!$this->con){
            die("Connection failed : ".mysqli_connect_error());
        }

        //query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
        //execute query
        if(mysqli_query($this->con,$sql)){
            $this->con=mysqli_connect($servername,$username,$password,$dbname);
        }
       

        //create table
        $sql="CREATE TABLE IF NOT EXISTS $tablename
              (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
              nama_produk VARCHAR(25) NOT NULL,
              harga_produk FLOAT,
              gambar_produk VARCHAR(100)
              );";

              if(!mysqli_query($this->con,$sql)){
                echo "ERROR Creating table :".mysqli_error($this->con);
              }else{
                return false;
              }
    }
    //get produk from database
    public function getData(){
        $sql = "SELECT * FROM $this->tablename";

        $result = mysqli_query($this->con,$sql);
        if(mysqli_num_rows($result)>0){
            return $result;
        }
    }
}
?>